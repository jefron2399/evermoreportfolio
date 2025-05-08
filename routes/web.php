<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ResumeView;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('livewire.portfolio');
});


Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

Route::get('/resume', function () {
    return view('resume');
})->name('resume.view');
Route::get('/resume/download', function () {
    $pdf = Pdf::loadView('resume');
    return $pdf->download('Evermore_Harmony_Mwase_Resume.pdf');
})->name('resume.download');
