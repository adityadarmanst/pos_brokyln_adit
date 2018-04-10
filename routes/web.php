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

Route::get('/home', 'HomeController@index')->name('home');
//super admin area
Route::get('/berandaDasarSuperAdmin', 'superAdminController@berandaDasarSuperAdmin');
//kasir cabang area
Route::get('/berandaKasir', 'kasirController@berandaDasar');
//master area
Route::get('/customerMaster','superAdminController@customerMaster');
Route::get('/formEditCustomer/{idCustomer}','superAdminController@formEditCustomer');
Route::post('/proEditCustomer','superAdminController@proEditCustomer');
Route::post('/proTambahCustomer','superAdminController@proTambahCustomer');
Route::get('/totalTransaksiCustomer','superAdminController@totalTransaksiCustomer');
Route::get('/cekTotalTransaksiCustomer/{idCustomer}','superAdminController@cekTotalTransaksiCustomer');
//testing area
Route::get('/testMasukanForm','superAdminController@testMasukanForm');
Route::post('/proMasukanTest','superAdminController@proMasukanTest');
Route::get('/tesHomeAngular','testingController@homePageAngluar');
Route::get('/linkAngular1','testingController@linkAngular1');
