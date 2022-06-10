<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tutors\TutorsController;
use App\Http\Controllers\Tutors\TutorController;



Route::get('/list', [TutorsController::class, 'list'])->name('list');

Route::get('/details/{id}', [TutorController::class, 'details'])->name('details');

Route::get('/create', [TutorController::class, 'getCreateView'])->name('getCreateView');

Route::post('/create', [TutorController::class, 'create'])->name('create');


//Route::get('/{any}', [TutorsController::class, 'list'])->where('any', '.*')->name('list');

