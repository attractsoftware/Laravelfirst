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

Route::get('/', function () {
    return view('homepage');
});
Route::get('/surega', function () {
    return view('welcome');
});
Route::get('/rs', function () {
    return view('calculate');
});
Route::get('/form', function () {
    return view('student');
});

//Route::get('/form', function () {
//    return view('homepage');
//});

//Route::get( 'index',[\App\Http\Controllers\TestController::class,'index']);
//Route::post( 'save',[\App\Http\Controllers\TestController::class,'save']);
//Route::get( 'form',[\App\Http\Controllers\TestController::class,'homepage']);
//Route::post( 'profile',[\App\Http\Controllers\TestController::class,'profile']);
//Route::post('update',[\App\Http\Controllers\TestController::class,'update']);
Route::get( 'rs',[\App\Http\Controllers\TestController::class,'calculate']);
Route::post('second',[\App\Http\Controllers\TestController::class,'second']);
Route::post('form1',[\App\Http\Controllers\TestController::class,'form1']);
//Route::get('form',[\App\Http\Controllers\stuController::class,'save']);
Route::get('form',[\App\Http\Controllers\stuController::class,'form']);
Route::post('save',[\App\Http\Controllers\stuController::class,'save']);
Route::post('file',[\App\Http\Controllers\stuController::class,'file']);




