<?php

namespace App\Services\Project;

use App\Models\Project;

class ProjectService
{
    public function getItems()
    {
        return Project::all();
    }

    public function assign($request, $id){
        var_dump($request);
        $project = Project::find($id);
        $project->fill($request->only($project->department_id));

//        Department::find(1)->services()->first()->pivot
        $project->save();

        return $project;
    }

    public function assigned($request, Project $project)
    {

    }
}
