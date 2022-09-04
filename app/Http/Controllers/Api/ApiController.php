<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiService;
use App\Services\Response\ResponseService;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected ApiService $service;


    public function index(Request $request)
    {

        $items = $this->service->getItems($request);
        return ResponseService::sendJsonResponse(
            true,
            null,
            ['items' => $items->getCollection()->toArray(),
            'page' => $items->currentPage(),
            'total' => $items->total()],
            200
        );
    }

    public function store(Request $request, $id = null)
    {
        $model = $this->service->store($request, $id);

        return ResponseService::sendJsonResponse(
            true,
            null,
            ['items' => $model],
            200
        );

    }

    public function update(Request $request, $id)
    {
        return $this->store($request, $id);
    }

    public function destroy($id)
    {
        $isDeleted = $this->service->destroy($id);

        return ResponseService::sendJsonResponse(
            true,
            null,
            ['items' => $isDeleted],
            200
        );
    }
}
