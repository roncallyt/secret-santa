<?php

use App\Http\Controllers\GetUsersFromGroupController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\RegisterUsersInTheGroupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::prefix('/groups')->group(function () {
        Route::get('/', [GroupController::class, 'index'])->name('group.index');
        Route::post('/', [GroupController::class, 'store'])->name('group.store');
        Route::get('/{group}', [GroupController::class, 'show'])->name('group.show');
        Route::put('/{group}', [GroupController::class, 'update'])->name('group.update');
        Route::delete('/{group}', [GroupController::class, 'destroy'])->name('group.destroy');

        Route::get('/{group}/users', GetUsersFromGroupController::class)->name('group.user.index');
        Route::post('/{group}/users', RegisterUsersInTheGroupController::class)->name('group.user.store');
    });
});
