<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\JobApplicationController;
Route::group(["middleware"=>["admin"]],function(){

    Route::get('/', function () {
        return view('backend.home');
    });

    Route::get('/job-applications', [JobApplicationController::class,"index"])->name("list-job-application");
    Route::put('/job-applications/{id}', [JobApplicationController::class,"update"])->name("update-job-application");
    Route::delete('/job-applications/{id}', [JobApplicationController::class,"delete"])->name("delete-job-application");
});