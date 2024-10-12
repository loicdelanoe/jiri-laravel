<?php

use App\Http\Controllers\AssignementController;

Route::get('/jiris/{jiri}/assignements/create', [AssignementController::class, 'create'])->name('assignements.create');
Route::post('/assignements', [AssignementController::class, 'store'])->name('assignements.store');
