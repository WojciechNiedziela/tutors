<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tutors\TutorsController;
use App\Http\Controllers\Tutors\TutorController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\HomeController;


Route::get('/list', [TutorsController::class, 'list'])->name('list');

Route::get('/show/{id}', [TutorController::class, 'show'])->name('show');

Route::get('/create', [TutorController::class, 'getCreateView'])->name('getCreateView');

Route::post('/create', [TutorController::class, 'create'])->name('create');

Route::get('/update/{id}', [TutorController::class, 'getUpdateView'])->name('getUpdateView');

Route::post('/update/{id}', [TutorController::class, 'update'])->name('update');

Route::post('destroy/{id}', [TutorController::class, 'destroy'])->name('destroy');

Route::get('sendEmail/{id}', [TutorController::class, 'sendEmail'])->name('sendEmail');



Route::get('/{any}', [TutorsController::class, 'list'])->where('any', '.*')->name('home');

//Route::middleware(['auth'])->group(function(){

//     Route::group(
//         ['prefix' => '/tutors/', 'as' => 'tutors.'],
//         function () {
//             Route::get('/list', [TutorsController::class, 'list'])->name('list');

// Route::get('/details/{id}', [TutorController::class, 'details'])->name('details');

// Route::get('/create', [TutorController::class, 'getCreateView'])->name('getCreateView');

// Route::post('/create', [TutorController::class, 'create'])->name('create');

// Route::get('/update/{id}', [TutorController::class, 'getUpdateView'])->name('getUpdateView');

// Route::post('/update/{id}', [TutorController::class, 'update'])->name('update');

// Route::post('destroy/{id}', [TutorController::class, 'destroy'])->name('destroy');

// Route::get('sendEmail/{id}', [TutorController::class, 'sendEmail'])->name('sendEmail');
    
//         }
//     );
//     Route::get('/{any}', [HomeController::class, 'homePage'])->where('any', '.*');


//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// });

