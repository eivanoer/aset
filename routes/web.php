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

Route::get('admin', function () {
    return view('admin_template');
});
Route::get('asset', function () {
    return view('asset');
});
Route::get('golongan', function () {
    return view('master/golongan/index');
});
Route::get('golcreate', function () {
    return view('master/golongan/create');
});
Route::get('goledit/{id}', function ($id) {
    return view('master/golongan/edit')->with('id', $id);
});
Route::get('kelompok', function () {
    return view('master/kelompok/index');
});
Route::get('kelcreate', function () {
    return view('master/kelompok/create');
});
Route::get('keledit/{id}', function ($id) {
    return view('master/kelompok/edit')->with('id', $id);
});
Route::get('kodeperkiraan', function () {
    return view('master/kodeperkiraan/index');
});
Route::get('kpcreate', function () {
    return view('master/kodeperkiraan/create');
});
Route::get('kpedit/{id}', function ($id) {
    return view('master/kodeperkiraan/edit')->with('id', $id);
});
Route::get('subperkiraan', function () {
    return view('master/subperkiraan/index');
});
Route::get('subcreate', function () {
    return view('master/subperkiraan/create');
});
Route::get('subedit/{id}', function ($id) {
    return view('master/subperkiraan/edit')->with('id', $id);
});
Route::get('satuan', function () {
    return view('master/satuan/index');
});
Route::get('satuancreate', function () {
    return view('master/satuan/create');
});
Route::get('satuanedit/{id}', function ($id) {
    return view('master/satuan/edit')->with('id', $id);
});
Route::get('sumberdana', function () {
    return view('master/sumberdana/index');
});
Route::get('sdcreate', function () {
    return view('master/sumberdana/create');
});
Route::get('sdedit/{id}', function ($id) {
    return view('master/sumberdana/edit')->with('id', $id);
});
Route::get('kondisi', function () {
    return view('master/kondisi/index');
});
Route::get('kondisicreate', function () {
    return view('master/kondisi/create');
});
Route::get('kondisiedit/{id}', function ($id) {
    return view('master/kondisi/edit')->with('id', $id);
});
Route::get('lokasi', function () {
    return view('master/lokasi/index');
});
Route::get('lokasicreate', function () {
    return view('master/lokasi/create');
});
Route::get('lokasiedit/{id}', function ($id) {
    return view('master/lokasi/edit')->with('id', $id);
});
Route::get('penyusutan', function () {
    return view('penyusutan/index');
});
Route::get('penyusutancreate', function () {
    return view('penyusutan/create');
});
Route::get('penyusutanedit/{id}', function ($id) {
    return view('penyusutan/edit')->with('id', $id);
});
Route::get('aset', function () {
    return view('aset/index');
});
Route::get('asetcreate', function () {
    return view('aset/create');
});
Route::get('asetedit/{id}', function ($id) {
    return view('aset/edit')->with('id', $id);
});
Route::get('mutasi', function () {
    return view('mutasi/index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('qr-code-g', function () {
  
    \QrCode::size(500)
            ->format('png')
            ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));
    
  return view('qrCode');
    
});
