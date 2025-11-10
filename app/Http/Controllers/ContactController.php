<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use Symfony\Component\Mailer\Exception\TransportException;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        try{

            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email', 
                'ville' => 'required|string',
                'postal' => 'required|string',
                'message' => 'required|string',
                'option' => 'required|string',
            ]);
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'ville' => $request->ville,
                'postal' => $request->postal,
                'option' => $request->option,
                'user_message' => $request->message,
            ]; 
            Mail::send('emails.contact', $data, function ($mail) use ($request) { 
                $mail->to('soudayssoudays7@gmail.com')
                    ->subject('Nouveau message du site');
            });
            return back()->with('success', 'Votre message a été envoyé avec succès l adresse  seremad5@gmail.com !');
       
        }catch(ValidationException $e){
            return back()->with('error', 'Erreur de validation des champs : '. $e->getMessage());

        }catch(TransportException $e){
            return back()->with('error', 'Erreur de connection avec le protocoles de transfert : '. $e->getMessage());

        }
    }

}