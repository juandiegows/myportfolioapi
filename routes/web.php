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
 
    $options = [
        'isHtml5ParserEnabled' => true,
        'isRemoteEnabled' => true,
        'dpi' => 150,
        'defaultFont' => 'Arial'
    ];
    
    $pdf = PDF::loadView('reports.CV', ['user' => $user, 'lang' => $lang], $options);
    $pdf->setPaper(array(0, 0, 650, 970), 'portrait');
    return $pdf->stream('JuanDiegoWS.'.$lang.'.pdf');

})->name('resume.preview');


Route::get('/resume/{lang}/{userIdUserName}/download', function($lang, $userIdUserName){

    $user = User::where('user_name', $userIdUserName)->orWhere('id', $userIdUserName)->first();  

    $options = [
        'isHtml5ParserEnabled' => true,
        'isRemoteEnabled' => true,
        'dpi' => 150,
        'defaultFont' => 'Arial'
    ];
    
    $pdf = PDF::loadView('reports.CV', ['user' => $user, 'lang' => $lang], $options);
    $pdf->setPaper(array(0, 0, 650, 970), 'portrait');
    
    // Cambiar stream a download para que el PDF se descargue
    return $pdf->download('JuanDiegoWS.'.$lang.'.pdf');

})->name('resume.download');

Route::get('/resume/{lang}/{userIdUserName}/view', function($lang, $userIdUserName){

    $user = User::where('user_name', $userIdUserName)->orWhere('id', $userIdUserName)->first();  

    return view('reports.CV', ['user' => $user, 'lang' => $lang]);
})->name('resume.view');