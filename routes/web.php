<?php

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

Route::get('/', 'AuthController@index')->name('/');
route::post('/login','AuthController@auth')->name('login');
route::get('/logout','AuthController@logout')->name('logout');
route::get('/home','HomeController@index')->name('home');
route::resource('crear_vista','MakeviewController');

route::resource('users','UsuarioController');

// usuarios 

route::get('users/users-active/{id}/{user_active}','UsuarioController@user_active')->name('users.users_active');

//configuración

route::get('config','ConfigController@index')->name('config.index');
route::patch('config/{id}','ConfigController@update')->name('config.update');
route::delete('config/delete','ConfigController@remove_img')->name('config.delete');

