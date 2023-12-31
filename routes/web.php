<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/about', function () {
    return view('about', [
        "name" => "akhsan",
        "email" => "akhsan@gmail.com"
    ]);
});

Route::get('/view', function () {
    return view('boom', [
        "name" => "akhsannnn",
        "email" => "akhsan@gmail.com"
    ]);
});

Route::get('/view', [PostController::class,'boomesport']);