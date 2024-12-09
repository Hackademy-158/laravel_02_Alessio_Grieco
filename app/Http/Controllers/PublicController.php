<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Questa funzione gestisce la homepage del sito
    public function homepage() {
        // Ritorna la vista 'homepage.blade.php' che si trova in resources/views
        return view('homepage');
    }

    // Questa funzione gestisce la pagina "Chi Siamo"
    public function chiSiamo() {
        // Ritorna la vista 'chi-siamo.blade.php'
        return view('chi-siamo');
    }

    // Questa funzione gestisce la pagina dei servizi
    public function servizi() {
        // Ritorna la vista 'servizi.blade.php'
        return view('servizi');
    }

    // Questa funzione mostra la pagina contatti
    public function contattaci() {
        // Ritorna la vista 'contattaci.blade.php'
        return view('contattaci');
    }
}
