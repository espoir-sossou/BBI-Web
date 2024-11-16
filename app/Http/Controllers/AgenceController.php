<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AgenceController extends Controller
{
    public function agenceDashboard()
    {
        return view('Layout.Backend.Agence_dashboard.index');
    }

    public function annonceListe()
    {
        $annonces = Annonce::all(); // Récupérer toutes les annonces
        return view('Layout.Backend.Agence_dashboard.annonce-liste', compact('annonces'));
    }
        public function annonce()
    {
        return view('Layout.Backend.Agence_dashboard.annonce');
    }

    public function annonceAddPage()
    {
        return view('Layout.Backend.Agence_dashboard.annonce-add-page');
    }

    public function annonceCreate(Request $request)
    {
        // Vérifier la session
        $token = session('token');
        if (!$token) {
            return back()->withErrors(['error' => 'Token d\'authentification manquant.']);
        }

        // Validation des champs
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'typePropriete' => 'required|string|max:255',
            'montant' => 'required|numeric|min:0',
            'superficie' => 'required|numeric|min:0',
            'nbChambres' => 'required|integer|min:0',
            'nbSalleDeDouche' => 'required|integer|min:0',
            'veranda' => 'required|integer|min:0', // Nombre attendu (par exemple 0 ou 1 pour vrai/faux)
            'terrasse' => 'required|integer|min:0',
            'cuisine' => 'required|integer|min:0',
            'dependance' => 'required|integer|min:0',
            'piscine' => 'required|integer|min:0',
            'garage' => 'required|integer|min:0',
            'titreFoncier' => 'required|integer|min:0',
            'localite' => 'required|string|max:255',
            'localisation' => 'required|string|max:255',
            'details' => 'nullable|string',
            'typeTransaction' => 'required|string', // Limiter à "Vente" ou "Location"
            'visite360' => 'nullable|string|max:255',
            'video' => 'nullable|string|max:255',
            'image' => 'required|file|mimes:jpeg,png,gif|max:2048', // Image obligatoire
        ]);

        // Enregistrer l'image
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('annonces', 'public');
        }

        // Enregistrer la date de création
        $validated['dateCreation'] = now();

        // Créer l'annonce
        Annonce::create([
            'titre' => $validated['titre'],
            'description' => $validated['description'],
            'typePropriete' => $validated['typePropriete'],
            'montant' => $validated['montant'],
            'superficie' => $validated['superficie'],
            'nbChambres' => $validated['nbChambres'],
            'nbSalleDeDouche' => $validated['nbSalleDeDouche'],
            'veranda' => $validated['veranda'],
            'terrasse' => $validated['terrasse'],
            'cuisine' => $validated['cuisine'],
            'dependance' => $validated['dependance'],
            'piscine' => $validated['piscine'],
            'garage' => $validated['garage'],
            'titreFoncier' => $validated['titreFoncier'],
            'localite' => $validated['localite'],
            'localisation' => $validated['localisation'],
            'details' => $validated['details'] ?? null, // Null si non fourni
            'typeTransaction' => $validated['typeTransaction'],
            'visite360' => $validated['visite360'] ?? null,
            'video' => $validated['video'] ?? null,
            'image' => $validated['image'],
            'dateCreation' => $validated['dateCreation'],
            'validee' => false, // Par défaut, non validée
        ]);

        return redirect()->route('annonce.liste')->with('success', 'Annonce créée avec succès.');
        }

        public function annonceValidader($id, Request $request)
        {
            // Trouver l'annonce par son ID
            $annonce = Annonce::findOrFail($id);

            // Vérifier si l'action est "validate" ou "unvalidate"
            if ($request->action == 'validate') {
                $annonce->validee = true;
            } elseif ($request->action == 'unvalidate') {
                $annonce->validee = false;
            }

            // Sauvegarder les changements
            $annonce->save();

            // Rediriger avec un message de succès
            return redirect()->route('annonce.liste')->with('success', 'Annonce mise à jour avec succès.');
        }



        public function destroyAnnonce($id)
        {
            // Trouver l'annonce par son ID
            $annonce = Annonce::findOrFail($id);

            // Supprimer l'annonce
            $annonce->delete();

            // Rediriger avec un message de succès
            return redirect()->route('annonce.liste')->with('success', 'Annonce supprimée avec succès.');
        }




















    public function annonceAdd(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'typePropriete' => 'required|string',
            'montant' => 'required|numeric',
            'superficie' => 'required|numeric',
            'nbChambres' => 'required|integer',
            'nbSalleDeDouche' => 'required|integer',
            'veranda' => 'required|boolean',
            'terrasse' => 'required|boolean',
            'cuisine' => 'required|boolean',
            'dependance' => 'required|boolean',
            'piscine' => 'required|boolean',
            'garage' => 'required|boolean',
            'localite' => 'required|string',
            'titreFoncier' => 'required|boolean',
            'localisation' => 'required|string',
            'details' => 'required|string',
            'typeTransaction' => 'required|string',
            'visite360' => 'nullable|url',
            'video' => 'nullable|url',
            'assigned_admin_id' => 'required|integer',
            'photos' => 'nullable|array',
            'photos.*' => 'file|mimes:jpeg,jpg,png,gif|max:2048', // Taille max 2 Mo
        ]);

        // Vérification et traitement des fichiers photos
        $photos = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                if ($photo->isValid()) {
                    $photos[] = $photo->store('public/photos/' . now()->format('Y/m/d'));
                } else {
                    return back()->withErrors(['photos' => 'Un ou plusieurs fichiers sont invalides.']);
                }
            }
        }

        // Préparer les données pour l'API
        $data = array_merge($validatedData, ['photos' => $photos]);

        // Vérification du token
        $token = session('token');
        if (!$token) {
            return back()->withErrors(['error' => 'Token d\'authentification manquant.']);
        }

        // Appel à l'API
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post(config('custom.routes.annonces_create'), $data);

        // Gestion de la réponse
        if ($response->successful()) {
            return redirect()->route('annonces')->with('success', 'Annonce créée avec succès.');
        }

        $errorMessage = $response->json('message') ?? 'Erreur inconnue';
        return back()->withErrors(['error' => 'Erreur lors de la création de l\'annonce.', 'details' => $errorMessage]);
    }


     // Route GET pour afficher le formulaire de téléchargement
     public function uploadFile()
     {
         return view('Layout.Backend.Agence_dashboard.upload');
     }
     public function getFile($fileName)
     {
        $token = session('token');
    if (!$token) {
        return back()->withErrors(['error' => 'Token d\'authentification manquant.']);
    }

    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->get('http://localhost:3000/annonces/getAllFiles');

    if ($response->successful()) {
        $files = $response->json()['files'];

        return view('Layout.Backend.Agence_dashboard.get-file', compact('files'));
    } else {
        return back()->withErrors(['error' => 'Erreur lors de la récupération des fichiers']);
    }
     }


     public function uploadFileAdd(Request $request)
     {
         // Vérifier si un fichier a été téléchargé et qu'il est valide
         if ($request->hasFile('file') && $request->file('file')->isValid()) {
             // Récupérer le fichier téléchargé
             $file = $request->file('file');
             $filePath = $file->getPathname();

             // Récupérer le token d'authentification depuis la session
             $token = session('token');
             if (!$token) {
                 return back()->withErrors(['error' => 'Token d\'authentification manquant.']);
             }

             // Envoyer le fichier à l'API NestJS
             $response = Http::withHeaders([
                 'Authorization' => 'Bearer ' . $token, // Ajouter le token d'authentification
             ])
             ->attach('file', fopen($filePath, 'r'), $file->getClientOriginalName()) // Utiliser le nom du champ 'file'
             ->post('http://localhost:3000/annonces/upload'); // Remplace par l'URL correcte de ton API NestJS

             // Vérifier la réponse de l'API
             if ($response->successful()) {
                 // Rediriger vers /get-file avec le nom du fichier
                 return redirect()->route('getFile', ['fileName' => $response->json()['file']]);
             } else {
                 return back()->with('error', 'File upload failed: ' . $response->json()['message']);
             }
         }

         return back()->with('error', 'No file selected or invalid file.');
     }



    public function agenceTable()
    {
        return view('Layout.Backend.Agence_dashboard.table');
    }
    public function agenceChart()
    {
        return view('Layout.Backend.Agence_dashboard.charts');
    }
}
