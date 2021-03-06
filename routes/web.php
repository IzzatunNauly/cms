<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\newController;
use App\Http\Controllers\programController;
use App\Http\Controllers\AboutasController;
use views\layouts\masterView;
use database\seeders\UserBaruSeeder;
use database\seeders\UserSeeder;
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
//Route::get('/', function () { 
//    echo "Selamat Datang"; 
//   });

//Nomor2
//Route::get('/about', function () { 
//    echo "NIM : 2041720166 <br>"; 
//    echo "Nama : Izzatun Nauly <br>";
//    echo "Kelas : TI-2H <br>";
//   });

//Nomor3
//Route::get('/articles/{id}', function ($id) { 
//    echo "Ini adalah halama artikel dengan ID : ".$id; 
//   });
   
//PRKTIKUM2(PERCOBAAN1)
//Nomor1
//Route::get('/', [PageController::class, 'index']); 

//Nomor2
//Route::get('/about', [PageController::class, 'about']); 

//Nomor3
//Route::get('/articles/{id}', [PageController::class, 'articles']); 

//PRKTIKUM2(PERCOBAAN2)
//Nomor1
//Route::get('/', [HomeController::class, 'index']); 
//Route::get('/', [AboutController::class, 'index']); 
//Route::get('/', [ArticleController::class, 'index']);
//Nomor2
//Route::get('/about', [HomeController::class, 'about']); 
//Route::get('/about', [AboutController::class, 'about']); 
//Route::get('/about', [ArticleController::class, 'about']); 
//Nomor3
//Route::get('/articles/{id}', [HomeController::class, 'articles']); 
//Route::get('/articles/{id}', [AboutController::class, 'articles']); 
//Route::get('/articles/{id}', [ArticleController::class, 'articles']); 

//PRAKTIKUM3
//Nomor1
//Route::prefix('home')->group(function () {
//   Route::get('/', [ProductController::class, 'home'] );
//});
//Nomor2
//Route::prefix('product')->group(function () {
//    Route::get('/{id}', [ProductController::class, 'products'] );
//});
//Nomor3
//Route::prefix('new')->group(function () {
//    Route::get('/{id}', [ProductController::class, 'new'] );
//});
//Nomor4
//Route::prefix('program')->group(function () {
//    Route::get('/{id}', [ProductController::class, 'program'] );
//});
//Nomor5
//Route::prefix('aboutus')->group(function () {
//    Route::get('/', [ProductController::class, 'aboutus'] );
//});
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/login', function () {
//    return view('login');
// });

Route::resource('articles', ArticleController::class);
Route::get('/article/cetak_pdf', [ArticleController::class,'cetak_pdf'])->name('cetak_pdf');