<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;



class FormController extends Controller
{
    public function afficherFormulaire(): View
    {
        return view('form');
    }

    public function traiterFormulaire(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Traitement des données ici (par exemple, enregistrement dans la base de données)

        // Redirection vers une page de confirmation
        return redirect()->route('confirmation')->with('success', 'Formulaire soumis avec succès !');
    }

}
