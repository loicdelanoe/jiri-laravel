<?php

use App\Http\Controllers\JiriController;
use App\Models\Jiri;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Jiris
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/jiris', [JiriController::class, 'index'])
        ->name('jiri.index');

    // Create
    Route::get('/jiris/create', [JiriController::class, 'create'])
        ->name('jiri.create');
    Route::post('/jiris', [JiriController::class, 'store'])
        ->name('jiri.store');

    // Edit
    Route::get('/jiris/{jiri}/edit', [JiriController::class, 'edit'])
        ->can('update', 'jiri')
        ->name('jiri.edit');
    Route::patch('/jiris/{jiri}', [JiriController::class, 'update'])
        ->can('update', 'jiri')
        ->name('jiri.update');

    // Delete
    Route::delete('/jiris/{jiri}', [JiriController::class, 'destroy'])
        ->can('delete', 'jiri')
        ->name('jiri.destroy');

    // Show
    Route::get('/jiris/{jiri}', [JiriController::class, 'show'])
        ->name('jiri.show');
});

//Route::get('/', [JiriController::class, 'index'])->name('jiri.home');

