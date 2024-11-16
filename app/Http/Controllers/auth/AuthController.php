<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
        public function googleLogin()
{
    // URL de l'authentification Google sur l'API NestJS
    $response = config('custom.routes.auth_google_login');

    // Redirection vers l'API pour l'authentification Google
    return redirect()->away($response);
    }

    public function userProfil(Request $request)
    {
        // Vérifier si l'utilisateur est connecté en utilisant la session
        if ($request->session()->has('user')) {
            // Récupérer les informations de l'utilisateur depuis la session
            $userData = $request->session()->get('user');

            // Afficher la page de profil avec les informations de l'utilisateur
            return view('Layout.Connexion.Clients.user-profile', ['user' => $userData]);
        }

        // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
        return redirect()->route('loginPage');
    }

    public function signUpPage()
    {
        return view('Layout.Connexion.Clients.sign_up');
    }
    public function handleSignup(Request $request)
    {
        // Valider les champs du formulaire
        $request->validate([
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'sexe' => 'required|string|in:M,F', // Validation pour les valeurs 'M' et 'F'
            'role' => 'required|string|in:ADMIN,ACHETEUR,VENDEUR,AGENCE,USER', // Validation des rôles
            'email' => 'required|email',
            'password' => 'required|string|min:6',  // Ajoute un champ "password_confirmation" dans ton formulaire si tu veux confirmer le mot de passe
            'adresse' => 'nullable|string|max:255',
        ]);

        // Appeler l'API NestJS pour l'inscription
        $response = Http::post(config('custom.routes.auth_register'), [
            'nom' => $request->input('lastname'),
            'prenom' => $request->input('firstname'),
            'sexe' => $request->input('sexe'),
            'role' => $request->input('role'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),  // Envoyer le mot de passe brut, l'API se chargera du hachage
            'telephone' => $request->input('phone'),
            'adresse' => $request->input('adresse'),
        ]);

        // Vérifier la réponse de l'API
        if ($response->successful()) {
            // Si l'inscription réussit, rediriger avec un message de succès
            return redirect()->route('loginPage')->with('success', 'Inscription réussie ! veuillez vous connecter ');
        } else {
            // Afficher un message d'erreur si l'API retourne une erreur
            $errorMessage = $response->json('message') ?? 'Erreur lors de l\'inscription';
            return back()->withErrors(['message' => $errorMessage]);
        }
    }

    public function loginPage()
    {
        return view('Layout.Connexion.Clients.sign_in');
    }
    public function handleLogin(Request $request)
    {
        // Valider les champs
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Appeler l'API NestJS
        $response = Http::post(config('custom.routes.auth_login'), [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        if ($response->successful() && $response->json('status') === "0000") {
            // Si l'authentification est réussie, récupérer les données de l'utilisateur
            $data = $response->json('data');
            $role = $data['role'];  // Récupérer le rôle de l'utilisateur

            // Enregistrer les informations de l'utilisateur et le token dans la session
            Session::put('user', $data);
            Session::put('token', $data['token']);  // Sauvegarder le token dans la session

            // Redirection en fonction du rôle
            switch ($role) {
                case 'ADMIN':
                    return redirect()->route('admin.dashboard')->with('success', 'Connexion réussie !');
                case 'AGENCE':
                    return redirect()->route('agence.dashboard')->with('success', 'Connexion réussie !');
                case 'VENDEUR':
                    return redirect()->route('vendeur.dashboard')->with('success', 'Connexion réussie !');
                case 'ACHETEUR':
                    return redirect()->route('acheteur.dashboard')->with('success', 'Connexion réussie !');
                case 'USER':
                    return redirect()->route('user.dashboard')->with('success', 'Connexion réussie !');
                default:
                    // Si le rôle n'est pas reconnu, afficher un message d'erreur
                    return redirect()->route('loginPage')->with('fail', 'Rôle utilisateur non reconnu.');
            }
        } else {
            // Afficher un message d'erreur si l'API retourne une erreur
            $errorMessage = $response->json('message') ?? 'Erreur lors de la connexion';
            return redirect()->route('loginPage')->with('fail', $errorMessage);
        }
    }


    public function handleLogout(Request $request)
    {
        // Vérifiez si un utilisateur est authentifié dans la session
        if (Session::has('user')) {
            // Récupère le token de l'utilisateur pour l'envoyer à l'API NestJS
            $token = Session::get('user.token');
            $isGoogleAuth = Session::get('user.isGoogleAuth', false);

            // Supprime les informations de session de l'utilisateur
            Session::flush();

            // Choisissez la bonne route pour la déconnexion en fonction du type de connexion
            $logoutRoute = $isGoogleAuth ? config('custom.routes.auth_google_logout') : config('custom.routes.auth_logout');

            $response = Http::withToken($token)->post($logoutRoute);

            if ($response->successful()) {
                return redirect()->route('loginPage')->with('success', 'Déconnexion réussie !');
            } else {
                return redirect()->route('user.profil')->with('fail', 'Erreur lors de la déconnexion depuis le serveur.');
            }
        } else {
            // Si l'utilisateur n'est pas en session, redirection directe vers la page de connexion
            return redirect()->route('loginPage')->with('fail', 'Aucun utilisateur connecté.');
        }
    }




}
