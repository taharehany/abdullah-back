<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CanDoController;
use App\Http\Controllers\Admin\AboutMeController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ReasonController;
use App\Http\Controllers\Admin\SettingsController;
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
      Route::resource('/can', CanDoController::class);
      Route::resource('/about', AboutController::class);
      Route::get('/aboutme', [AboutMeController::class, 'edit'])->name('aboutme.edit');
      Route::put('/aboutme', [AboutMeController::class, 'update'])->name('aboutme.update');

      Route::get('/reason', [ReasonController::class, 'edit'])->name('reason.edit');
      Route::put('/reason', [ReasonController::class, 'update'])->name('reason.update');

      Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');
      Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');

      Route::get('/project_data_remove', [ProjectsController::class, 'project_data_remove'])->name('project.project_data_remove');


   }
);

Auth::routes();
