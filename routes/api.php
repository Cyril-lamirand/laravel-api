<?php

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/tasks', function() {
   return "All tasks";
});

Route::get('/tasks/{taskId}', function($taskId) {
    return "Task : ".$taskId;
});

Route::put('/tasks/{taskId}', function($taskId) {
    return "Edit : ".$taskId;
});

Route::delete('/tasks/{taskId}', function($taskId) {
    return "Delete : ".$taskId;
});

Route::post('/tasks', function(Request $request) {
    return 'Add a task !';
});


