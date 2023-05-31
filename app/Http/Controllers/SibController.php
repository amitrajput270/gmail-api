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
        $url = 'http://hrms.localhost/api/getCtcApi';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, request()->all());
        $response = curl_exec($curl);
        curl_close($curl);
        return response()->json(json_decode($response, true));
    }
}
