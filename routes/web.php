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
    return view('welcome');
})->name('inicio');

Route::get ('/soma', 'App\Http\Controllers\CalculadoraController@soma')->name('soma');
Route::post ('/calcular-soma', '\App\Http\Controllers\CalculadoraController@calcularSoma')->name('somar');
Route::get ('/operações', 'App\Http\Controllers\CalculadoraController@operações')->name('op');
Route::get ('/subtrai', 'App\Http\Controllers\CalculadoraController@subtrai')->name('menos');
Route::post ('/calcular-subtração', '\App\Http\Controllers\CalculadoraController@calcularSubtração')->name('subtrai');
Route::get ('/multiplica', 'App\Http\Controllers\CalculadoraController@multiplica')->name('vezes');
Route::post ('/calcular-multiplicação', '\App\Http\Controllers\CalculadoraController@calcularMultiplicação')->name('multiplicar');
Route::get ('/divide', 'App\Http\Controllers\CalculadoraController@divide')->name('div');
Route::post ('/calcular-divisão', '\App\Http\Controllers\CalculadoraController@calcularDivisão')->name('dividir');