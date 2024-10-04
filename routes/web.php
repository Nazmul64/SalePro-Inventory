<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', function () {
    return view('admin.dashboard.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('Catgory')->group(function () {
    Route::get('view-category', [CategoryController::class, 'index'])->name('index.view');
});

