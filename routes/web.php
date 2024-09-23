<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\JiriController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JiriController::class, 'index'])->name('jiri.home');
Route::get('/jiris', [JiriController::class, 'index'])->name('jiri.index');
Route::get('/jiris/create', [JiriController::class, 'create'])->name('jiri.create');
Route::post('/jiris', [JiriController::class, 'store'])->name('jiri.store');
Route::get('/jiris/{id}', [JiriController::class, 'show'])->name('jiri.show');

Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contact.show');
