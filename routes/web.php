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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'usuarios','middleware'=>'auth'], function()
{

    Route::get('/index','UsersController@index')->name('inicio');
    Route::get('editar/{user}','UsersController@edit')->name('usuarios.editar');
    Route::post('actualizar','UsersController@update')->name('usuarios.update');

    Route::get('crearhobby','HobbiesController@create')->name('hobby.crear');
    Route::post('storehobby','HobbiesController@store')->name('hobby.store');
    Route::get('verhobby','HobbiesController@show')->name('hobby.show');
    Route::get('edit/{hobbie}','HobbiesController@edit')->name('hobby.edit');
    Route::post('updatehobby','HobbiesController@update')->name('hobby.update');
    Route::get('usershobby/{id}','HobbiesController@showadmin')->name('hobby.showadmin');

    

});
