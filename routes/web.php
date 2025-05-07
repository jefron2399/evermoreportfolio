<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('livewire.portfolio');
});


Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');