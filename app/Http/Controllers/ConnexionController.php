<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    //
    public function formulaire(){

        return view('connexion');
    }

    public function traitement(){

        request()->validate([
            'mail' => ['required'],
            'mdp' => ['required'],
        ]);

        $resultat = auth()->attempt([

            'email' => request('mail'),
            'password' => request('mdp'),
        ]);

        var_dump($resultat);

        return 'Traitement formulaire connexion';
    }
}


