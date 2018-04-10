<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//super admin route
Route::get('/berandaDasarSuperAdmin', 'superAdminController@berandaDasarSuperAdmin');
Route::get('/riwayatTransaksiSuperAdmin','superAdminController@riwayatTransaksiSuperAdmin');
//Route::get('/cekNamaCustomer/{idCustomer}','superAdminController@cekNamaCustomer');
//kasir cabang route
Route::get('/berandaKasir', 'kasirController@berandaDasar');
//master route
Route::get('/customerMaster','superAdminController@customerMaster');
Route::get('/formEditCustomer/{idCustomer}','superAdminController@formEditCustomer');
Route::post('/proEditCustomer','superAdminController@proEditCustomer');
Route::post('/proTambahCustomer','superAdminController@proTambahCustomer');
Route::get('/totalTransaksiCustomer','superAdminController@totalTransaksiCustomer');
Route::get('/cekTotalTransaksiCustomer/{idCustomer}','superAdminController@cekTotalTransaksiCustomer');
//print out route
Route::get('/cetakStruk/{idStruk}','superAdminController@cetakStruk');
//testing route
Route::get('/testMasukanForm','superAdminController@testMasukanForm');
Route::post('/proMasukanTest','superAdminController@proMasukanTest');
Route::get('/tesHomeAngular','testingController@homePageAngluar');
Route::get('/linkAngular1','testingController@linkAngular1');
