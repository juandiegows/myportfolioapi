<?php

use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\SocialMediaManager;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/manager/social-media', SocialMediaManager::class)->name('social-media');
    Route::get('/manager/services', ServicesComponent::class)->name('services');
});
