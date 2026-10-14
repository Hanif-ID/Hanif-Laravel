<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
=======
>>>>>>> 94fd392014f245409763cef9776c0cbc83e8e40f

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/home',[HomeController::class,'index']);
=======
>>>>>>> 94fd392014f245409763cef9776c0cbc83e8e40f
