<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tutors\TutorsController;
use App\Http\Controllers\Tutors\TutorController;



Route::get('/list', [TutorsController::class, 'list'])->name('list');

Route::get('/details/{id}', [TutorController::class, 'details'])->name('details');

Route::get('/create', [TutorController::class, 'getCreateView'])->name('getCreateView');

Route::post('/create', [TutorController::class, 'create'])->name('create');

Route::get('/update/{id}', [TutorController::class, 'getUpdateView'])->name('getUpdateView');

Route::post('/update/{id}', [TutorController::class, 'update'])->name('update');

Route::post('destroy/{id}', [TutorController::class, 'destroy'])->name('destroy');



//Route::get('/{any}', [TutorsController::class, 'list'])->where('any', '.*')->name('list');

