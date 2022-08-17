<?php

use App\Http\Controllers\Admin\ProjectsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(
    [
        'prefix' => 'dashboard',
        'middleware' => ['auth']
    ],
    function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('dashboard');
        Route::resource('/projects', ProjectsController::class);
    }
);

Auth::routes();
