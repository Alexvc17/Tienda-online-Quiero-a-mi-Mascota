<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Presentacion;
use App\Http\Controllers\Perros;
use App\Http\Controllers\Gatos;
use App\Http\Controllers\Contactanos;

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

Route::get('/',[Presentacion::class, 'index']);

Route::get('catalogo/perros', [Perros::class, 'perros']);
Route::get('catalogo/gatos', [Gatos::class, 'gatos']);


Route::get('contactanos',[Contactanos::class, 'contacto']);




