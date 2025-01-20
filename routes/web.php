<?php

use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\SocialMediaManager;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

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

Route::get('/resume/{lang}/{userIdUserName}/preview', function($lang, $userIdUserName){

    $user = User::where('user_name', $userIdUserName)->orWhere('id', $userIdUserName)->first();  

    $pdf = PDF::loadView('reports.CV', ['user' => $user, 'lang' => $lang]);
    $pdf->setPaper(array(0, 0, 650, 970), 'portrait');
    return $pdf->stream('preview.pdf');

})->name('resume.preview');