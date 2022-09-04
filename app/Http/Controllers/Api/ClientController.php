<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Client\ClientService;
use App\Services\Department\DepartmentService;
use Illuminate\Http\Request;

class ClientController extends ApiController
{
    public function __construct(ClientService $service)
    {
        $this->service = $service;
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
