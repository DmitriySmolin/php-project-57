<?php

use App\Http\Controllers\LabelController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskStatusController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Mail\User\PasswordMail;
use Laracasts\Flash\Flash;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome')->name('home');

require __DIR__ . '/auth.php';

Route::resource('task_statuses', TaskStatusController::class);
Route::resource('tasks', TaskController::class);
Route::resource('labels', LabelController::class);
