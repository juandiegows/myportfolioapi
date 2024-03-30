<?php

use App\Http\Controllers\IpAddressController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\TypeTopicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\WorkExperienceController;
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
    Route::get('/users', 'index');
    Route::get('/user/{user}', 'show');
    Route::get('/user/{user}/services', 'services');
    Route::get('/user/{user}/social-medias', 'socialMedias');
    Route::get('/user/{user}/professions', 'professions');
    Route::get('/user/{user}/clients', 'clients');
    Route::get('/user/{user}/skills', 'skills');
    Route::get('/user/{user}/works', 'works');
    Route::get('/user/{user}/educations', 'educations');
    Route::get('/user/{user}/projects', 'projects');
    Route::get('/user/{user}/posts', 'posts');
});
Route::get('/ip-address', [IpAddressController::class, 'getIpAddress']);

Route::get('/visit', [VisitController::class, 'index']);
Route::controller(MessageController::class)->group(function () {
    Route::post('message', 'store');
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
    Route::get('clients', 'index');
});

Route::controller(TopicController::class)->group(function () {
    Route::get('topics', 'index');
});


Route::controller(WorkExperienceController::class)->group(function () {
    Route::get('work-experiences', 'index');
});

Route::controller(ProfessionController::class)->group(function () {
    Route::get('professions', 'index');
});

Route::controller(TypeTopicController::class)->group(function () {
    Route::get('type-topics', 'index');
});
