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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
});

Route::namespace('Cliente')->prefix('cliente')->name('cliente.')->middleware('can:cliente-users')->group(function(){
    /* Route::resource('/operazione', 'OperazioneController'); */

});

Route::livewire('/operazioni', 'operazioni')->name('operazioni')->middleware('auth');
Route::livewire('/genera-distinta/{id}', 'genera-distinta')->name('distinta')->middleware('auth');
Route::livewire('/gestione-fornitori', 'gestione-fornitori')->name('fornitori')->middleware('auth');
