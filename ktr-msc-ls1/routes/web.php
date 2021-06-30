<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessCardController;

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

Route::get('/dashboard',[BusinessCardController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::post('/newbusinesscard',[BusinessCardController::class,'store'])->middleware(['auth']);

Route::get('/newbusinesscard', function () {
    return view('newbusinesscard');
})->middleware(['auth'])->name('get_newbusinesscard');



require __DIR__.'/auth.php';
