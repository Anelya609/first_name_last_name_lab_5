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
    return view('welcome');
});


//1
use App\Http\Controllers\StudentController;
Route::get('/details', [StudentController::class,'display']); 

//2
Route::get('/details/{id}', [StudentController::class,'index']);  

//3
Route::get('/display/{age?}',[StudentController::class,'show']); 