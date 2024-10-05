<?php

use App\Http\Controllers\AttendanceController;

Route::post('/attendances/{attendance}', [AttendanceController::class, 'update'])->name('attendances.update');
