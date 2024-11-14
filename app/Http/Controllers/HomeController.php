<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{// Dans le contrôleur Laravel
    public function homePage(Request $request)
{
    // Récupérer les informations de l'utilisateur depuis les paramètres de la requête
    $userData = $request->only(['email', 'nom', 'prenom', 'role', 'telephone']);

    // Vérifier que l'email et d'autres informations essentielles sont présentes
    if (isset($userData['email'])) {
        // Stocker les informations de l'utilisateur dans la session
        session(['user' => $userData]);

        // Afficher la page d'accueil avec les informations de l'utilisateur
        return view('index', ['user' => $userData]);
    }

    return view('index');

}



}
