<?php

namespace App\Services\Department;

use App\Models\Department;
use App\Models\Programmer;
use App\Models\Project;

class DepartmentService
{
    public function store($request, $department){

        $project_id = $request->project_id ?? null;
        $programmer_ids = $request->programmer_ids ?? null;

        $department->fill($request->only($department->getFillable()));
        $department->save();


        if($project_id){
            $project = Project::find($project_id);
            $project->department_id = $department->id;
            $project->save();
        }

        $department->programmers()->detach();
        if($programmer_ids){
            foreach ($programmer_ids as $id){
                $department->programmers()->attach($id);
            }
        }
        return $department;
    }

    public function show(Department $department)
    {

        $project = $department->project()->get();
        $programmers = $department->programmers()->get();

        return ['department' => $department, 'project' => $project, 'programmers' => $programmers];
    }
}
