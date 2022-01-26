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

Route::get('/biodata', function () {
    return view('welcome');
});
 
Route::get('biodata', function () {
    $data=[
        'nama'=>'Agil Pebrianti',
        'lahir'=>'Bandung, 23 Februari 2004',
        'hobi'=>'Menulis',
        'jk'=>'Perempuan',
        'agama'=>'Islam',
        'alamat'=>'Rancaekek, Bandung',
        'telp'=>'0895707222552',
        'email'=>'agilfebrianti13@gmail.com',
    ];

return view('biodata',$data);

});