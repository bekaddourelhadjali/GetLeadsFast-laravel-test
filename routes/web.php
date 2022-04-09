<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\JobApplicationController;

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
    return redirect()->route("home");
});


Route::get('/job-application', [JobApplicationController::class,"index"]);
Route::post('/job-application', [JobApplicationController::class,"store"])->name("new-job-application");

Route::get('/job-application/{id}',[JobApplicationController::class,"show"] )->name("show-job-application")->middleware("auth");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
