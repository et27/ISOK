<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('courses.index');
});

Route::resource('courses', CourseController::class);

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/feedback/{feedback}', [FeedbackController::class, 'show']);

Route::patch('/feedback/{feedback}/status/{status}',
    [FeedbackController::class, 'changeStatus']
)->name('feedback.status');
