<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Services\Department\DepartmentService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\FlareClient\Solutions\ReportSolution;

class DepartmentController extends ApiController
{
    public function __construct(DepartmentService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new Response(Department::with('project', 'programmers', 'lead')->get());
    }

    public function paginate()
    {
        return new Response(Department::with('project', 'programmers', 'lead')->paginate(20));
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $res = Department::where('id',$request->get())->delete();
    }
}
