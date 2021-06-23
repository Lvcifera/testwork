<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/feedback', [FeedbackController::class, 'feedback'])->name('feedback')->middleware('auth');
Route::post('/feedback/add', [FeedbackController::class, 'feedbackAdd'])->name('feedback.add');
Route::get('/feedback/my', [FeedbackController::class, 'myFeedback'])->name('feedback.my')->middleware('auth');

Auth::routes();

