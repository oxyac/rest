<?php

namespace App\Services\Department;

use App\Models\Department;
use App\Models\Lead;
use App\Models\Programmer;
use App\Models\Project;
use App\Services\ApiService;
use Illuminate\Support\Facades\DB;

class DepartmentService extends ApiService
{
    public function store($request, $id = null){

        $project_id = $request->project_id ?? null;
        $programmer_ids = $request->programmer_ids ?? null;
        $lead_id = $request->lead_id ?? null;

        if($id){
            $department = Department::find($id);
            if(!$department){
                return null;
            }

        } else{
            $department = new Department();
        }
//        var_dump($request);die;
        if($lead_id){
            $department->lead_id = $lead_id;
        }
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
