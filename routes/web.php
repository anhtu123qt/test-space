<?php

use App\Http\Controllers\BookController;
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group([
    'middleware' => 'auth'
],function(){
    Route::get('index',[BookController::class,'index'])->name('books.index');
    Route::get('create',[BookController::class,'create']);
    Route::post('store',[BookController::class,'store'])->name('books.store');
    Route::get('edit/{book}',[BookController::class,'edit'])->name('books.edit');
    Route::post('update/{book}',[BookController::class,'update'])->name('books.update');
    Route::post('delete/{book}',[BookController::class,'destroy'])->name('books.delete');
});

require __DIR__.'/auth.php';
