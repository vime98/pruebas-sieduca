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

Route::prefix('v1')->group(function(){
    //Only login controller works outside of auth middleware
    Route::post('login', 'Api\Core\Auth\LoginController@login');

    Route::get('logout', 'Api\Core\Auth\LoginController@logout');

    Route::post('user', 'Api\Core\UserController@createUser');

    Route::group(['middleware' => 'auth:api'], function() {
        //User Routes
        Route::get('users', 'Api\Core\UserController@getUsers');
        Route::put('user/{id}', 'Api\Core\UserController@updateUser');
        Route::delete('user/{id}', 'Api\Core\UserController@deleteUser');

        //Role Routes
        Route::get('roles', 'Api\Core\RoleController@getRoles');
        Route::post('role', 'Api\Core\RoleController@createRole');
        Route::put('role/{id}', 'Api\Core\RoleController@updateRole');  
        Route::delete('role/{id}', 'Api\Core\RoleController@deleteRole');

        //Assigned Roles
        Route::get('assigned-roles/{id}', 'Api\Core\RoleUserController@getRolesUser');
        Route::post('assign-role', 'Api\Core\RoleUserController@createRoleUser');
        Route::delete('remove-role/{id}', 'Api\Core\RoleUserController@deleteRoleUser');
    }); 
});