<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tutors\TutorsController;
use App\Http\Controllers\Tutors\TutorController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\HomeController;


    Route::group(['prefix' => '/tutors/', 'as' => 'tutors.'], function () {

            Route::get('/list', [TutorsController::class, 'list'])->name('list');

            Route::get('/show/{id}', [TutorController::class, 'show'])->name('show');

            Route::get('/create', [TutorController::class, 'getCreateView'])->name('getCreateView');

            Route::post('/create', [TutorController::class, 'create'])->name('create');

            Route::get('/update/{id}', [TutorController::class, 'getUpdateView'])->name('getUpdateView');

            Route::post('/update/{id}', [TutorController::class, 'update'])->name('update');

            Route::post('destroy/{id}', [TutorController::class, 'destroy'])->name('destroy');

            
        });
            


            Route::get('send-email', [MailController::class, 'sendEmail'])->name('sendEmail');
            Route::get('send-email-view/{id}', [MailController::class, 'sendEmailView'])->name('sendEmailView');
            Route::get('/{any}', [TutorsController::class, 'list'])->where('any', '.*')->name('any');