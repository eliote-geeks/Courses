<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
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

Route::resource('categories',CategoryController::class)->except('destroy');
Route::get('categories/delete/{category}',[CategoryController::class,'delete'])->name('categories.delete');
Route::get('categories/upgrade/{category}',[CategoryController::class,'upgrade'])->name('categories.upgrade');
Route::resource('courses',CourseController::class)->except('destroy');

