<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(SocialMediaController::class)->group(function () {
    Route::get('social-medias', 'index');
});

Route::controller(EducationController::class)->group(function () {
    Route::get('educations', 'index');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('services', 'index');
});

Route::controller(ClientController::class)->group(function () {
    Route::get('client', 'index');
});

Route::controller(TopicController::class)->group(function () {
    Route::get('topic', 'index');
});