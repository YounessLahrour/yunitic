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

Route::get('/', function () {
    return view('auth.login');
});
Route::resource('empleados', 'EmpleadoController');
Route::resource('clientes', 'ClienteController');
Route::resource('ordenes', 'OrdenController');
//Abajo van las rutas POST
Route::post('ordenes1','OrdenController@notificar')->name('ordenes.notificar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
