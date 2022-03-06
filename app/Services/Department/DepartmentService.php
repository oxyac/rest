<?php

namespace App\Services\Department;

class DepartmentService
{
    public function store($request, $department){
        $department->fill($request->only($department->getFillable()));
        $department->save();

        return $department;
    }
}
