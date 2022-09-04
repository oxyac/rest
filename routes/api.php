<?php

use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\LeadController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ProgrammerController;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::group(['middleware' => 'auth:sanctum'], function() {

    Route::resource('posts', PostController::class);
//});

//Route::put('/programmers/assign', [ProgrammerController::class, 'assign']);
//Route::put('/projects/assign', [ProjectController::class, 'assign']);
//Route::get('/programmers/{id}/department', [ProgrammerController::class, 'assigned']);
//Route::get('/departments/paginate', [DepartmentController::class, 'paginate']);
//
//Route::resource('programmers', ProgrammerController::class);
//Route::resource('departments', DepartmentController::class);
//Route::resource('leads', LeadController::class);
//Route::resource('projects', ProjectController::class);
//Route::resource('clients', ClientController::class);




//Route::post('/tokens/create', function (Request $request) {
//    var_dump($request->user());die;
//    $token = $request->user()->createToken($request->token_name);
//
//    return ['token' => $token->plainTextToken];
//});
//
//Route::get('/programmer/{id}/department', function ($id) {
//    return \App\Models\Programmer::find($id)->department;
//});
//
//Route::get('/lead/{id}/department', function ($id) {
//    return \App\Models\Lead::find($id)->department;
//});
//
//Route::get('/department/{id}/lead', function ($id) {
//    return \App\Models\Department::find($id)->lead;
//});



//
//Route::post('/tokens/create', function (Request $request) {
//
//    return $request->user()->createToken('token-name', ['department:delete'])->plainTextToken;
//});

//http://127.0.0.1:8001/sanctum/csrf-cookie
