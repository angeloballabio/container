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
/* Route::get('/home', 'operazioni')->name('home'); */

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
});

Route::namespace('Cliente')->prefix('cliente')->name('cliente.')->middleware('can:cliente-users')->group(function(){
    /* Route::resource('/operazione', 'OperazioneController'); */

});

Route::livewire('/operazioni', 'operazioni')->name('operazioni')->middleware('auth');
Route::livewire('/genera-distinta/{id}', 'genera-distinta')->name('distinta')->middleware('auth');
Route::livewire('/genera-mandati/{id}', 'genera-mandati')->name('mandati')->middleware('auth');
Route::livewire('/genera-bollettini/{id}', 'genera-bollettini')->name('bollettini')->middleware('auth');
Route::livewire('/gestione-fornitori', 'gestione-fornitori')->name('fornitori')->middleware('auth');
Route::livewire('/gestione-compagnie', 'gestione-compagnie')->name('compagnie')->middleware('auth');
Route::livewire('/gestione-destinatari', 'gestione-destinatari')->name('destinatari')->middleware('auth');
Route::livewire('/gestione-trasportatori', 'gestione-trasportatori')->name('trasportatori')->middleware('auth');
Route::livewire('/gestione-consegna', 'gestione-consegna')->name('consegna')->middleware('auth');
Route::livewire('/gestione-dogane', 'gestione-dogane')->name('dogana')->middleware('auth');
Route::livewire('/gestione-container', 'gestione-container')->name('container')->middleware('auth');
Route::livewire('/gestione-valute', 'gestione-valute')->name('valuta')->middleware('auth');
Route::livewire('/resa-fattura', 'resa-fattura')->name('resa.fattura')->middleware('auth');
Route::livewire('/stampa-distinta/{id}', 'stampa-distinta')->name('stampa.distinta')->middleware('auth');
