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
        $annualCtc = request('ctcamount');
        $monthlyCtc = $annualCtc / 12;
        $basic = $monthlyCtc * 0.5; // 50% of monthly ctc
        $hra = $basic * 0.4; // 40% of basic
        $lta = $basic * 0.2; // 20% of basic
        $ma = $basic * 0.2; // 20% of basic
        $foodCoupon = 1000; // 1000 per month
        if (request('foodCoupon') && request('foodCoupon') >= 500 && request('foodCoupon') <= 1000) {
            $foodCoupon = request('foodCoupon');
        }
        $healthInsurance = 281; // 281 per month
        $healthInsuranceMembers = request('healthInsuranceMembers') && request('healthInsuranceMembers') > 1 ? request('healthInsuranceMembers') : 1;
        $healthInsurance = $healthInsurance * $healthInsuranceMembers;
        $esi1 = 0;
        $esi2 = 0;
        if ((int) $basic <= 9530) {
            // $annualCtc = 9530 * 12;
            $monthlyCtc = 9530 * 2;
            $basic = 9530;
            $hra = 0;
            $lta = 0;
            $ma = 0;
            $epf = $basic * 0.12; // 12% of basic
            $adminCharges = $basic * 0.01; // 1% of basic
            $otherAllowances = $monthlyCtc - ($basic + $hra + $lta + $ma + $epf + $adminCharges + $foodCoupon);
            $grossSalary = $basic + $hra + $lta + $ma + $otherAllowances;
            // Deductions
            $pf = 0;
            $esi1 = $grossSalary * 0.0325; // 1.75% of gross salary
        } elseif ((int) $annualCtc <= 291225) {
            $monthlyCtc = $annualCtc / 12;
            $basic = $monthlyCtc * 0.5; // 50% of monthly ctc
            $hra = $basic * 0.4; // 40% of basic
            $lta = $basic * 0.2; // 20% of basic
            $ma = 0;
            $epf = $basic * 0.12; // 12% of basic
            $adminCharges = $basic * 0.01; // 1% of basic
            $otherAllowances = $monthlyCtc - ($basic + $hra + $lta + $ma + $epf + $adminCharges + $foodCoupon);
            $grossSalary = $basic + $hra + $lta + $ma + $otherAllowances;
            $healthInsurance = 0;
            if ((int) $grossSalary < 21000) {
                $esi1 = $grossSalary * 0.0325; // 3.25% of gross salary
                $esi2 = $grossSalary * 0.0075; // 0.75% of gross salary
            } else {
                $esi1 = 0;
                $esi2 = 0;
            }
            // Deductions
            $pf = $basic * 0.12; // 12% of basic
        } elseif (request('salaryRule') == 'fixed') {
            $changeBasic = 15000;
            $epf = $changeBasic * 0.12; // 12% of basic
            $adminCharges = $changeBasic * 0.01; // 1% of basic
            $otherAllowances = $monthlyCtc - ($changeBasic + $hra + $lta + $ma + $epf + $adminCharges + $foodCoupon);
            $grossSalary = $changeBasic + $hra + $lta + $ma + $otherAllowances;
            // Deductions
            $pf = $changeBasic * 0.12; // 12% of basic
        } elseif (request('salaryRule') == 'basic') {
            $epf = $basic * 0.12; // 12% of basic
            $adminCharges = $basic * 0.01; // 1% of basic
            $otherAllowances = $monthlyCtc - ($basic + $hra + $lta + $ma + $epf + $adminCharges + $foodCoupon);
            $grossSalary = $basic + $hra + $lta + $ma + $otherAllowances;
            // Deductions
            $pf = $basic * 0.12; // 12% of basic
        } elseif (request('salaryRule') == 'nopf') {
            $epf = 0;
            $adminCharges = 0;
            $otherAllowances = $monthlyCtc - ($basic + $hra + $lta + $ma + $epf + $adminCharges + $foodCoupon);
            $grossSalary = $basic + $hra + $lta + $ma + $otherAllowances;
            // Deductions
            $pf = 0;
        }
        $costToCompany = $grossSalary + $epf + $adminCharges + $foodCoupon;
        $netSalary = $grossSalary - ($pf + $healthInsurance);
        $totalDeductions = $pf + $healthInsurance + $esi1 + $esi2;
        return response()->json([
            'statusCode' => 'TXN',
            'status' => 'CTC calculated successfully.',
            'data' => [
                'annualCtc' => round($annualCtc, 2),
                'monthlyCtc' => round($monthlyCtc, 2),
                'basic' => round($basic, 2),
                'hra' => round($hra, 2),
                'lta' => round($lta, 2),
                'ma' => round($ma, 2),
                'epf' => round($epf, 2),
                'esi1' => round($esi1, 2),
                'adminCharges' => round($adminCharges, 2),
                'foodCoupon' => round($foodCoupon, 2),
                'otherAllowances' => round($otherAllowances, 2),
                'grossSalary' => round($grossSalary, 2),
                'pf' => round($pf, 2),
                'esi2' => round($esi2, 2),
                'healthInsurance' => round($healthInsurance, 2),
                'costToCompany' => round($costToCompany, 2),
                // 'totalDeductions' => round($totalDeductions,2),
                'netSalary' => round($netSalary, 2),
            ],
        ]);
    }
}
