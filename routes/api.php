<?php

use App\Http\Controllers\GroupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/groups', [GroupController::class, 'index'])->name('group.index');
    Route::post('/groups', [GroupController::class, 'store'])->name('group.store');
    Route::get('/groups/{group}', [GroupController::class, 'show'])->name('group.show');
    Route::put('/groups/{group}', [GroupController::class, 'update'])->name('group.update');
    Route::delete('/groups/{group}', [GroupController::class, 'destroy'])->name('group.destroy');
});
