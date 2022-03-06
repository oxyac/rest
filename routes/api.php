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

Route::resource('programmers', ProgrammerController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('leads', LeadController::class);
Route::resource('projects', ProjectController::class);
Route::resource('clients', ClientController::class);

