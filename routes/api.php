<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;



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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('permissions',PermissionController::class);
Route::resource('roles',RoleController::class);
Route::resource('users',UserController::class);


//test
Route::get('/roles/{id}/permissions', [RoleController::class, 'role_permissions_index']);
Route::get('/users/{id}/roles', [UserController::class, 'user_roles_index']);


