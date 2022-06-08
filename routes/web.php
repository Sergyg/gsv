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

//Route::get('/', function () {return view('home');
Route::get('/', function () {return view('home');
});
//Route::resource('/kontrahenty', 'KontrahentyController');
Route::redirect('/faktury.blade.php', '/faktury');
Route::redirect('/delehacji.blade.php', '/delehacji');
Route::redirect('/kontrolki.blade.php', '/kontrolki');
Route::redirect('/Pracovniki.blade.php', '/Pracovniki');
Route::redirect('/kontrahenty.blade.php', '/kontrahenty');

Route::get('/faktury', function () {return view('faktury');});
Route::get('/Pracovniki', function () {return view('Pracovniki');});
Route::get('/kontrolki', function () {return view('kontrolki');});

Route::get('/css/home.css', function () {return view('css.home');});
Route::get('/css/base.css', function () {return view('css.base');});


Route::get('/delehacji', [\App\Http\Controllers\DelehacjiController::class, 'index']);
Route::get('/delehacji/list', [\App\Http\Controllers\DelehacjiController::class, 'getDelehacji'])->name('delehacji.list');

Route::get('/kontrahenty', [\App\Http\Controllers\KontrahentyController::class, 'index']);
Route::get('/kontrahenty/getdata', [\App\Http\Controllers\KontrahentyController::class, 'getdata'])->name('kontrahenty.getdata');
Route::post('/kontrahenty/postdata', [\App\Http\Controllers\KontrahentyController::class, 'postdata'])->name('kontrahenty.postdata');
Route::post('/kontrahenty/gett/data', [\App\Http\Controllers\KontrahentyController::class, 'gettData'])->name('kontrahenty.gettData');
Route::post('/kontrahenty/destroy', [\App\Http\Controllers\KontrahentyController::class, 'destroy'])->name('kontrahenty.destroy');

