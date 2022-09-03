<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\searchbookcontroller;

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
    return view('registration');
});
Route::get('/', function () {
    return view('addbooks');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[App\Http\controllers\studentcontroller::class,'index']);
Route::post('memberreg',[App\Http\controllers\studentcontroller::class,'store'])->name('store');
Route::post('/',[App\Http\controllers\studentcontroller::class,'index'])->name('index');

Route::get('/',[App\Http\controllers\memberregistrationcontroller::class,'index']);
Route::post('registration',[App\Http\controllers\memberregistrationcontroller::class,'store'])->name('store');
Route::post('/',[App\Http\controllers\memberregistrationcontroller::class,'index'])->name('index');

Route::get('/',[App\Http\controllers\bookdetailcontroller::class,'index']);
Route::post('addbooks',[App\Http\controllers\bookdetailcontroller::class,'store'])->name('store');
Route::post('/',[App\Http\controllers\bookdetailcontroller::class,'index'])->name('index');

Route::get('/search',[searchbookcontroller::class,'search'])->name('web.search');









