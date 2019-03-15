<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
    
});

Route::get('/connect','ConnexionController@formulaire', function () {
    return view('connexion');
    
});

Route::post('/connect','ConnexionController@Traitement', function () {
  
    request()->validate([
        'mail' => ['required'],
        'mdp' => ['required'],
    ]);

    $connexion = new App\connexion;
    $connexion->email = request('mail');
    $connexion->mot_de_passe = bcrypt(request('mdp'));

    $connexion->save();

    return "nous avons reçus votre email qui est " . request('mail');
    
});

Route::get('/reserv', function () {
    return view('reservation');
    
});

Route::post('/reserv', function () {

    request()->validate([
        'nbplaces' => ['required','integer'],
        'date' => ['required'],
        'optradio'=> ['required'],
    ]);

    $reservation = new App\reservation;
    $reservation->nombre_de_places = request('nbplaces');
    $reservation->date = request('date');
    $reservation->horaire = request('optradio');



    $reservation->save();

    return "nous avons reçus votre réservation pour le film " . request('titre');
    
});

Route::get('/myreserv', function () {
    $myreserv = App\reservation::all();

    return view('mesreservation',['myreserv' => $myreserv] );

    
});

Route::get('/inscript', function () {
    return view('inscription');
    
});

Route::post('/inscript', function () {
  
    request()->validate([

        'nom' => ['required'],
        'prenom' => ['required'],
        'tel' => ['required'],
        'email' => ['required'],
        'password' => ['required','confirmed','min:8'],
        'password_confirmation' => ['required'],

    ]);

    $utilisateur = new App\utilisateur;
    $utilisateur->nom = request('nom');
    $utilisateur->prenom = request('prenom');
    $utilisateur->numero_telephone = request('tel');
    $utilisateur->email = request('email');
    $utilisateur->password = request('password');
    $utilisateur->comfirm_password = request('password_confirmation');


    $utilisateur->save();

    return "Vous êtes maintenant inscrit bienvenue" . request('nom');
    
});

