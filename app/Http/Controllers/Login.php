<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // L'authentification est réussie, rediriger vers la page d'accueil par exemple
        return redirect()->intended('/');
    }

    // L'authentification a échoué, rediriger vers le formulaire de login avec une erreur
    return back()->withErrors([
        'email' => 'Adresse email ou mot de passe incorrect',
    ]);
}
