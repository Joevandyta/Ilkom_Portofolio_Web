<?php

use App\Http\Controllers\aritmatika;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;


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


Route::get('/dashboard', [DataController::class,'dashdata'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/portofolio', [DataController::class,'data'])->middleware(['auth', 'verified'])->name('data');
Route::get('/create', [DataController::class,'insert'])->middleware(['auth', 'verified'])->name('create');
Route::post('/review', [DataController::class,'view'])->middleware(['auth', 'verified'])->name('review');

Route::view('/about','about' )->name('about');

Route::get('/insert',function () {
    return view('insert');
})->name('insert');

Route::get('/aritmatika', [aritmatika::class,'index'])->name('aritmatik');
