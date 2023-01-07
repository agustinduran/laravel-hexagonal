<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', UserFindAllController::class);
Route::get('/{id}', UserFindByIdController::class);
Route::delete('/{id}', UserDeleteByIdController::class);