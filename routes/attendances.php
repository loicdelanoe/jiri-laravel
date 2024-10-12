<?php

use App\Http\Controllers\AttendanceController;

Route::patch('/attendances/{attendance}', [AttendanceController::class, 'update'])->name('attendances.update');
