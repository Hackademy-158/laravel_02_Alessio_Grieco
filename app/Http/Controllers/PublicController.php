<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class PublicController extends Controller
{
    // Questa funzione gestisce la homepage del sito
    public function homepage()
    {
        return view('homepage');
    }

    // Questa funzione gestisce la pagina "Chi Siamo"
    public function chiSiamo()
    {
        return view('chi-siamo');
    }

    // Questa funzione gestisce la pagina dei servizi
    public function servizi()
    {
        return view('servizi');
    }

    // Questa funzione mostra la pagina contatti
    public function contattaci()
    {
        return view('contattaci');
    }

    // Questa funzione gestisce il sumbit del form
    public function formControl(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $info = $request->input('info');
    try{   
        Mail::to($email)->send(new ContactMail());
        return redirect(route('contattaci'))->with('emailSent','"Abbiamo ricevuto la tua mail, ti contatteremo a breve!"');
        // dd($request->all(), $nome, $email, $info);
    } catch (Exception $error){
        dd($error);
    }
}
}
