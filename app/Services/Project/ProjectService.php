<?php

namespace App\Services\Project;

use App\Models\Project;

class ProjectService
{
    public function getItems()
    {
        return Project::all();
    }
}
