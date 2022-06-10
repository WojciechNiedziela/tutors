<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tutors\TutorsController;
use App\Http\Controllers\Tutors\TutorController;



Route::get('/list', [TutorsController::class, 'list'])->name('list');

Route::get('/details/{id}', [TutorController::class, 'details'])->name('details');

//Route::get('/{any}', [TutorsController::class, 'list'])->where('any', '.*')->name('list');

