<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{

    public function show(){
    	return  view('contact');
    }



    public function sendMail(ContactRequest $request)
    {
        $data = $request->validated(); // Get validated data from the request
        
        // You can customize the email content as per your requirement
        $emailContent = "Nom: " . $data['nom'] . "\n" .
                        "Téléphone: " . $data['phone'] . "\n" .
                        "Email: " . $data['mail'] . "\n" .
                        "Entreprise: " . $data['work'] . "\n" .
                        "Objet: " . $data['link'] . "\n" .
                        "Question: " . $data['question'];

        // Send email
        
        Mail::raw($emailContent, function ($message) use ($data) {
            $message->to('morgan.kpassi@gmail.com')->subject('Nouveau message de contact');
        });

        // Redirect back or wherever you want after sending the email
        return redirect()->route('home')->with('success', 'Votre message a été envoyé avec succès.');
    }

}