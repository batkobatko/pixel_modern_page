<?php

use App\Http\Controllers\HomeController;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\UslugeController;
use App\Http\Controllers\Front\KontaktController;
use App\Http\Controllers\Front\DownloadController;
use App\Http\Controllers\Front\UsersController;
use App\Http\Controllers\Front\AboutUsController;
use App\Http\Controllers\Front\PriceController;
use App\Http\Controllers\Backend\MessagesController;
use App\Http\Controllers\Backend\MessagesEnController;
use App\Http\Controllers\Backend\AdminController;


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

 /*Route::get('/', function () {
 return view('welcome');
 });*/

//Route::get('/home/{name?}', [HomeController::class,'index'])->name('home.index');

Route::get('/', [IndexController::class,'index']);
Route::get('/en', [IndexController::class,'indexEn']);


Route::get('/special', [UslugeController::class,'special']);
Route::get('/web-prodavnica-info', [UslugeController::class,'webProdavnica']);
Route::get('/blog-info', [UslugeController::class,'blogInfo']);
Route::get('/oglasavanje', [UslugeController::class,'oglasavanje']);
Route::get('/seo', [UslugeController::class,'seo']);


Route::get('/aktuelno', [UslugeController::class,'aktuelno']);
Route::get('/aktuelno-en', [UslugeController::class,'aktuelnoEn']);

Route::get('/kontakt', [KontaktController::class,'kontakt']);
Route::get('/kontakt-en', [KontaktController::class,'kontaktEn']);

Route::get('/download', [DownloadController::class,'download']);
Route::get('/users', [UsersController::class,'users']);
Route::get('/o-nama', [AboutUsController::class,'aboutUs']);
Route::get('/o-nama-en', [AboutUsController::class,'aboutUsEn']);


Route::get('/cjenovnik', [PriceController::class,'price']);
Route::post('/post', [PriceController::class,'store'])->name('post');

Route::get('/price-list', [PriceController::class,'priceList']);

Route::post('/sendmessage', [MessagesController::class, 'insertData']);
Route::post('/sendmessage-en', [MessagesEnController::class, 'insertData']);

//Messages
Route::get('/messages', [AdminController::class, 'messages']);
Route::post('/multipledelete', [AdminController::class, 'multipleDelete']);

Route::group(['middleware' => ['auth']], function(){

});


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'admin'])->name('home');
