<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\uploadcontroller;


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

Route::post('/demo', function () {
    echo 'đây là phương thức get';
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('', [HomeController::class, 'index']);


Route::get('category',[CategoryController::class, 'index'])->name('category.index');

Route::get('category/create',[CategoryController::class, 'create'] )->name('user');

Route::post('categorry',[CategoryController::class, 'store'])->name('category.store');

Route::delete('category/{id}', [CategoryController::class , 'delete'])-> where(["id" => "[0-9]+"])->name('category.delete');
//route chyển hướng link đến trang form upload
Route::get('upload', [uploadcontroller::class, 'form'])->name('upload.form');

Route::post('upload', [uploadcontroller::class, 'upload'])->name('upload.upload');
