<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(TaskController::class)->prefix('tasks')->group(function () {
        Route::get('', 'index')->name('tasks');
        Route::get('create', 'create')->name('tasks.create');
        Route::post('store', 'store')->name('tasks.store');
        Route::get('show/{id}', 'show')->name('tasks.show');
        Route::get('edit/{id}', 'edit')->name('tasks.edit');
        Route::put('edit/{id}', 'update')->name('tasks.update');
        Route::delete('destroy/{id}', 'destroy')->name('tasks.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});