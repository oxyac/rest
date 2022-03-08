<?php

use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\LeadController;
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
//Route::put('/programmers/assign', [ProgrammerController::class, 'assign']);
//Route::put('/projects/assign', [ProjectController::class, 'assign']);
Route::get('/programmers/{id}/department', [ProgrammerController::class, 'assigned']);

Route::resource('programmers', ProgrammerController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('leads', LeadController::class);
Route::resource('projects', ProjectController::class);
Route::resource('clients', ClientController::class);


//Route::get('programmer/{id}/department', function (){
//   return \App\Models\Programmer::find(1)->department()->id;
//
//   foreach ($programmer->departments as $department){
//       return $department->language;
//   }
//});

Route::get('/department/{id}/programmers', function($id){
    return  \App\Models\Department::find($id)->programmers;

});

Route::get('/programmer/{id}/department', function($id){
    return \App\Models\Programmer::find($id)->department;
});

Route::get('/lead/{id}/department', function($id){
    return \App\Models\Lead::find($id)->department;
});

Route::get('/department/{id}/lead', function($id){
    return \App\Models\Department::find($id)->lead;
});

