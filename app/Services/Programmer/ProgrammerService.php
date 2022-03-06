<?php

namespace App\Services\Programmer;

use App\Models\Programmer;

class ProgrammerService
{

    public function getItems()
    {
        return Programmer::all();
    }

    public function update(\Illuminate\Http\Request $request, int $id)
    {

    }
}
