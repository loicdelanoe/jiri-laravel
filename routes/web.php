<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\JiriController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JiriController::class, 'index'])->name('jiri.home');
Route::get('/jiris', [JiriController::class, 'index'])->name('jiri.index');

Route::get('/jiris/create', [JiriController::class, 'create'])->name('jiri.create');
Route::post('/jiris', [JiriController::class, 'store'])->name('jiri.store');

Route::get('/jiris/{jiri}/edit', [JiriController::class, 'edit'])->name('jiri.edit');
Route::patch('/jiris/{jiri}', [JiriController::class, 'update'])->name('jiri.update');

Route::delete('/jiris/{jiri}', [JiriController::class, 'destroy'])->name('jiri.destroy');

Route::get('/jiris/{jiri}', [JiriController::class, 'show'])->name('jiri.show');


Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');

Route::get('/projects/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('project.store');

Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
Route::patch('/projects/{project}', [ProjectController::class, 'update'])->name('project.update');

Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');

Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::patch('/contacts/{contact}', [ContactController::class, 'update'])->name('contact.update');

Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contact.show');
