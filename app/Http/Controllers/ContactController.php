<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public $name;
    public $message;
    public $email;


    public function sendEmail(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

       $this->name= $request->input('name');
        $this->email= $request->input('email');
        $this->message= $request->input('message');


        // Send email
        Mail::raw($this->message. 'From :'.$this->name .' '.  $this->email 
        
        , function ($message) {
            $message->to('mwase.evermore@gmail.com')
                    ->from('mwase.evermore@gmail.com') // Must match verified sender!
                    ->subject('New Evermore Portfolio message');
        });
    

        return back()->with('success', 'Message sent successfully!');
    }
}