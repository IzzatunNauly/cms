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

//Route::get('/', function () {
//    return view('welcome');
//});

//PRAKTIKUM 1
//Nomor 1
Route::get('/', function () { 
    echo "Selamat Datang"; 
   });

//Nomor2
Route::get('/about', function () { 
    echo "NIM : 2041720166 <br>"; 
    echo "Nama : Izzatun Nauly <br>";
    echo "Kelas : TI-2H <br>";
   });

//Nomor3
Route::get('/articles/{id}', function ($id) { 
    echo "Ini adalah halama artikel dengan ID : ".$id; 
   });
   
   