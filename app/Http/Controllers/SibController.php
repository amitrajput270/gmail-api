<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class SibController extends Controller
{

    public function getParentNodes()
    {
        $userId = request('userId');
        $employees = Employee::select(
            'id',
            'name',
            'user_id as userId',
            'tl_id as parentId'
        )->get();
        $parentNodes = [];
        $child = $employees->where('userId', $userId)->first();
        if (!$child) {
            return response()->json([
                'statusCode' => 'ERR',
                'status' => 'User not found or not a valid user.',
            ]);
        }
        $parent = $employees->where('id', $child->parentId)->first();
        while ($parent) {
            $parentNodes[] = $parent;
            $parent = $employees->where('id', $parent->parentId)->first();
        }
        return response()->json([
            'statusCode' => 'TXN',
            'status' => 'Parent nodes fetched successfully.',
            'data' => [
                'id' => $child->id,
                'name' => $child->name,
                'userId' => $child->userId,
                'parentId' => $child->parentId,
                'parentNodes' => $parentNodes,
            ],
        ]);
    }

    public function getChildNodes()
    {
        $userId = request('userId');
        $employees = Employee::select(
            'id',
            'name',
            'user_id as userId',
            'tl_id as parentId'
        )
            ->get()
            ->toArray();
        $data = [];
        foreach ($employees as $employee) {
            $data[$employee['id']] = $employee;
        }
        $tree = [];
        $ancestors = [];
        foreach ($data as $id => $employee) {
            if (isset($data[$id]) && isset($data[$id]['parentId'])) {
                $ancestors[] = $data[$id]['parentId'];
            }
            $parent = array_pop($ancestors);
            $parent = $parent !== 0 ? $parent : null;
            if ($parent) {
                $data[$parent]['children'][] = &$data[$id];
            } else {
                $tree[] = &$data[$id];
            }
        }
        if ($userId) {
            $tree = $this->filterTree($tree, $userId);
        }
        if (count($tree) > 1) {
            $tree = [
                'id' => 0,
                'name' => 'All',
                'children' => $tree,
            ];
        }
        return response()->json([
            'statusCode' => 'TXN',
            'status' => 'Child nodes fetched successfully.',
            'data' => $tree,
        ]);
    }

    private function filterTree($tree, $userId)
    {
        $filteredTree = [];
        foreach ($tree as $node) {
            if ($node['userId'] == $userId) {
                $filteredTree[] = $node;
            } else {
                if (isset($node['children'])) {
                    $node['children'] = $this->filterTree($node['children'], $userId);
                    if (count($node['children']) > 0) {
                        $filteredTree = $node['children'];
                    }
                }
            }
        }
        return $filteredTree;
    }

    public function calculateCtc()
    {
        // Salary Calculation formula
        // CTC =  228720
        // monthlyctcAmount = CTC / 12 = 19060
        // Basic salary = 50% of CTC
        // HRA = 40% of BS
        // LTA = 20% of BS
        // Medical Allowances = 20% of BS or In the case of ESI the calculation will be in 10%
        // Other Allowances = Adjustment =  CTC - (BS+HRA+LTA+MA)
        // Gross Salary = BS + HRA+ LTA + MA + OA
        // Inhand = GS-All deduction (Insurance + PF+ ESI + Food)
        // Normal PF Calculation -
        // PF = 12% of BS
        // EPF+Admin = 13% of BS (12% + 1%)
        // Fixed PF - All calculations will be from 15000
        // PF = 12%
        // EPF+Admin = 13%(12% + 1%)
        // ESI
        // IF the gross salary will be <= 21000, then the calculation will be
        // Employee ESI - 0.75% of GS
        // Employer ESI - 3.25% of GS
        // Food = 1000 fixed

        $annualCtcAmount = request('ctcamount');
        $salaryType = request('salaryType');
        $monthlyctcAmount = round($annualCtcAmount / 12, 2);
        $bascisalary = round($monthlyctcAmount * 0.5, 2, PHP_ROUND_HALF_UP); // basic salary (50% of CTC
        if ($bascisalary < 9530) {
            $bascisalary = 9530;
        }
        $hra = round($bascisalary * 0.4, 2, PHP_ROUND_HALF_DOWN); // house rent allowance
        $ltAllowance = $bascisalary * 0.2; // leave travel allowance
        $medicalAllowance = $bascisalary * 0.2;
        $otherAllowance = null;
        $grossSalary = $bascisalary + $hra + $ltAllowance + $medicalAllowance + $otherAllowance;
        $pfAndAdminCharges = $bascisalary * 0.13; // public fund
        $esi1 = $grossSalary * 0.0325; // employee state insurance
        $esi1 = $annualCtcAmount > '280000' ? 0 : $esi1;
        $esi2 = 0;
        $foodVoucher = 1000;
        if ($salaryType == 'basic') {
            //Employer Contribution 13%
            $pf = $bascisalary * 0.12; // public fund
            // Employer Contribution 0.75%
            $esi2 = $grossSalary * 0.0075; // employee state insurance
            $esi2 = round($annualCtcAmount > '280000' ? 0 : $esi2, 2, PHP_ROUND_HALF_UP);
        } elseif ($salaryType == 'fixed') {
            $fixed = 15000;
            $pf = $fixed * 0.12; // public fund
            $pfAndAdminCharges = $fixed * 0.13; // public fund
            $esi2 = $fixed * 0.0075; // employee state insurance
        } elseif ($salaryType == 'nopf') {
            $pf = 0; // public fund
            $pfAndAdminCharges = 0;
        } else {
            $pf = $bascisalary * 0.12; // public fund
        }
        $costtoCompany = number_format(round($grossSalary + $pfAndAdminCharges + $esi1, 2, PHP_ROUND_HALF_DOWN), 2, '.', '');

        if ($costtoCompany + $foodVoucher > $monthlyctcAmount) {
            $foodVoucher = 500;
            $costtoCompany += $foodVoucher;
            if ($costtoCompany > $monthlyctcAmount) {
                $foodVoucher = 0;
                $costtoCompany -= 500;
            }
        } else {
            $costtoCompany += $foodVoucher;
        }
        $otherAllowance = round($monthlyctcAmount - $costtoCompany, 2, PHP_ROUND_HALF_DOWN);
        // dd($monthlyctcAmount, $costtoCompany, $monthlyctcAmount - $costtoCompany, $otherAllowance);
        $costtoCompany = $costtoCompany + $otherAllowance;
        $healthInsurance = 0;
        $totalDeduction = $pfAndAdminCharges + $esi1 + $pf + $esi2 + $healthInsurance + $foodVoucher;
        $netSalary = round($grossSalary - ($pf + $esi2), 2, PHP_ROUND_HALF_DOWN);
        return response()->json([
            'statusCode' => 'TXN',
            'data' => [
                'annualCtcAmount' => $annualCtcAmount,
                'monthlyctcAmount' => $monthlyctcAmount,
                'bascisalary' => $bascisalary . '(' . number_format(round($bascisalary * 12, 2, PHP_ROUND_HALF_DOWN), 2, '.', '') . ')',
                'hra' => $hra . '(' . number_format(round($hra * 12, 2, PHP_ROUND_HALF_DOWN), 2, '.', '') . ')',
                'ltAllowance' => $ltAllowance . '(' . number_format(round($ltAllowance * 12, 2, PHP_ROUND_HALF_DOWN), 2, '.', '') . ')',
                'medicalAllowance' => $medicalAllowance . '(' . number_format(round($medicalAllowance * 12, 2, PHP_ROUND_HALF_DOWN), 2, '.', '') . ')',
                'otherAllowance' => $otherAllowance,
                'grossSalary' => $grossSalary . '(' . number_format(round($grossSalary * 12, 2, PHP_ROUND_HALF_DOWN), 2, '.', '') . ')',
                'pfAndAdminCharges' => $pfAndAdminCharges . '(' . number_format(round($pfAndAdminCharges * 12, 2, PHP_ROUND_HALF_DOWN), 2, '.', '') . ')',
                'esi1' => round($esi1, 2, PHP_ROUND_HALF_EVEN) . '(' . number_format($esi1 * 12, 2, '.', '') . ')',
                'pf' => $pf . '(' . number_format(round($pf * 12, 2, PHP_ROUND_HALF_DOWN), 2, '.', '') . ')',
                'esi2' => $esi2 . '(' . number_format($esi2 * 12, 2, '.', '') . ')',
                'foodVoucher' => $foodVoucher,
                'costtoCompany' => $costtoCompany . '(' . number_format(round($costtoCompany * 12, 0, PHP_ROUND_HALF_DOWN), 2, '.', '') . ')',
                'healthInsurance' => $healthInsurance,
                'totalDeduction' => [
                    'pfAndAdminCharges' => $pfAndAdminCharges,
                    'esi1' => $esi1,
                    'pf' => $pf,
                    'esi2' => $esi2,
                    'healthInsurance' => $healthInsurance,
                    'foodVoucher' => $foodVoucher,
                    'totalDeduction' => $totalDeduction,
                ],
                'netSalary' => $netSalary . '(' . number_format(round($netSalary * 12, 0, PHP_ROUND_HALF_DOWN), 2, '.', '') . ')',
            ],
        ]);
    }
}
