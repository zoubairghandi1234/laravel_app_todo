<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', [TodoListController::class,'index']);

Route::post('/markComplateRout/{id}', [TodoListController::class,'markComplate'])->name('markComplate');
Route::post('/saveItem', [TodoListController::class, 'saveItem'])->name('saveItem');
