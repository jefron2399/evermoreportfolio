<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function sendEmail(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        try {
            Mail::raw(
                "Name: {$data['name']}\nEmail: {$data['email']}\n\n{$data['message']}",
                function ($message) use ($data) {
                    $message->to(config('mail.contact_to'))
                        ->from(config('mail.from.address'), config('mail.from.name'))
                        ->replyTo($data['email'], $data['name'])
                        ->subject('New Evermore Portfolio message');
                }
            );
        } catch (Throwable $exception) {
            report($exception);

            return back()->withInput()->with('error', 'Your message could not be sent right now. Please email me directly.');
        }

        return back()->with('success', 'Message sent successfully!');
    }
}
