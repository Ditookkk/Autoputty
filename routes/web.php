<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
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

Route::get('/download', function () {
    return view('download');
});

// Route::get('/', function () {
//     return view('home');
// });

Route::get("/", [HomeController::class, "ViewHome"]);

Route::get("/homepage", [HomePageController::class, "HomePageView"]);

Route::get('/superadminhome', function () {
    return view('superadminhome');
});

Route::post("/login", [HomeController::class, "Autentikasi"]);

Route::get('/homepage', function () {
    return view('homepage');
});