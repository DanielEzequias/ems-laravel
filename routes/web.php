<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth', 'has.permission']], function(){
  
    Route::get('/', function () {
    return view('welcome');
     });
    Route::resource('department', 'DepartmentController');
    Route::resource('role', 'RoleController');
    Route::resource('user', 'UserController');
    Route::resource('permission', 'PermissionController');
    Route::resource('leave', 'LeaveController');
    Route::post('accept-reject-leave/{id}','LeaveController@acceptReject
    ')->name('accept.reject');
    Route::resource('notice', 'NoticeController');
    Route::get('/mail', 'MailController@create');



});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
