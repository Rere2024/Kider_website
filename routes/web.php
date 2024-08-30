<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ClassController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [PublicController::class, 'index'])->name('index')->middleware('verified');
Route::get('about', [PublicController::class, 'about'])->name('about');
Route::get('appointment', [PublicController::class, 'appointment'])->name('appointment');
Route::get('call', [PublicController::class, 'call'])->name('call');
Route::get('classes', [PublicController::class, 'classes'])->name('classes');
Route::get('contact', [PublicController::class, 'contact'])->name('contact');
Route::get('facility', [PublicController::class, 'facility'])->name('facility');
Route::get('team', [PublicController::class, 'team'])->name('team');
Route::get('testimonial', [PublicController::class, 'testimonial'])->name('testimonial');



// Route::prefix('admin')->group(function () {
//     Route::prefix('Classes')->group(function () {
//         Route::get('', [ClassController::class, 'index'])->name('classess.index');
//         Route::get('{id}/show', [ClassController::class, 'show'])->withTrashed()->name('admin.classes.show');
//         Route::get('create', [ClassController::class, 'create'])->name('classes.create');
//         Route::post('', [ClassController::class, 'store'])->name('classes.store');
//         Route::get('{id}/edit', [ClassController::class, 'edit'])->name('classes.edit');
//         Route::put('{id}', [ClassController::class, 'update'])->name('classes.update');
//         Route::delete('{id}/delete', [ClassController::class, 'destroy'])->name('classes.destroy');
//         Route::get('trashed', [ClassController::class, 'showDeleted'])->name('clases.showDeleted');
//         Route::patch('{id}', [ClassController::class, 'restore'])->name('classes.restore');
//         Route::delete('{id}/forcedelete', [ClassController::class, 'forcedelete'])->name('classes.forcedelete');
//     });
    
Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
