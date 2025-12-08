<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PapaApiController;

Route::get('/', function () {
    return view('crud');
});

Route::get('/', [PapaApiController::class, 'index'])->name('crud.view.index');
Route::post('/crearpapa', [PapaApiController::class, 'store'])->name('crud.view.store');
Route::put('/actualizarpapa/{id}', [PapaApiController::class, 'update'])->name('crud.view.update');
Route::delete('/eliminarpapa/{id}', [PapaApiController::class, 'destroy'])->name('crud.view.destroy');
