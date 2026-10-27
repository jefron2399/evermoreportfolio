<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ResumeView;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;

use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('livewire.portfolio');
});


Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

Route::get('/resume', function () {
    return view('resume', ['variant' => 'general', 'resumeVariant' => config('resumes.general')]);
})->name('resume.view');
Route::get('/resume/{variant}', function (string $variant) {
    abort_unless(array_key_exists($variant, config('resumes')), 404);

    return view('resume', ['variant' => $variant, 'resumeVariant' => config("resumes.$variant")]);
})->where('variant', 'general|support|software|ml')->name('resume.variant');
Route::get('/resume/download/{variant?}', function (?string $variant = 'general') {
    abort_unless(array_key_exists($variant, config('resumes')), 404);

    $pdf = Pdf::loadView('resume', [
        'variant' => $variant,
        'resumeVariant' => config("resumes.$variant"),
        'pdfMode' => true,
    ])->setPaper('a4', 'portrait');

    return response()->streamDownload(
        fn () => print($pdf->output()),
        'Evermore_Mwase_' . ucfirst($variant) . '_CV.pdf',
        ['Content-Type' => 'application/pdf']
    );
})->name('resume.download');

