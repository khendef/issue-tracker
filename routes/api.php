<?php
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\IssueController;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/issues', [IssueController::class, 'index']);
Route::post('/issues', [IssueController::class, 'store']);
Route::get('/issues/{id}', [IssueController::class, 'show']);
Route::put('/issues/{id}', [IssueController::class, 'update']);
Route::delete('/issues/{id}', [IssueController::class, 'destroy']);

Route::apiResource('projects', ProjectController::class);
Route::apiResource('employees', EmployeeController::class);

