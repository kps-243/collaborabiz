<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
class ContactController extends Controller
{

    public function show(){
    	return view('contact');
    }



    public function sendMail(ContactRequest $request)
    {
        $data = $request->validated(); // Get validated data from the request
        
        // Send email
        Mail::to('contact@collaborabiz.com')->send(new ContactMail($data));
        // Redirect back or wherever you want after sending the email
        return redirect()->route('home')->with('success', 'Votre message a été envoyé avec succès.');
    }

}