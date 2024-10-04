<?php

use App\Http\Controllers\JiriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Jiris
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/jiris', [JiriController::class, 'index'])->name('jiri.index');

    Route::get('/jiris/create', [JiriController::class, 'create'])->name('jiri.create');
    Route::post('/jiris', [JiriController::class, 'store'])->name('jiri.store');

    Route::get('/jiris/{jiri}/edit', [JiriController::class, 'edit'])->name('jiri.edit');
    Route::patch('/jiris/{jiri}', [JiriController::class, 'update'])->name('jiri.update');

    Route::delete('/jiris/{jiri}', [JiriController::class, 'destroy'])->name('jiri.destroy');

    Route::get('/jiris/{jiri}', [JiriController::class, 'show'])->name('jiri.show');
});

//Route::get('/', [JiriController::class, 'index'])->name('jiri.home');

