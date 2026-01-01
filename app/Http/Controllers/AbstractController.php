<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbstractFormRequest;
use App\Models\AbstractForm;
use Illuminate\Http\Request;

class AbstractController extends Controller
{
    /**
     * Page d'accueil
     */
    public function index()
    {
        return view("pages.abstracts.abstracts");
    }

    /**
     * Enregistrer l'abstract
     */
    public function store(AbstractFormRequest $request)
    {
        $validatedData = $request->validated();
        
        // Gestion du fichier uploadé
        if ($request->hasFile('abstract_file')) {
            $file = $request->file('abstract_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('abstracts', $filename, 'public');
            
            $validatedData['fichier_path'] = $path;
            $validatedData['fichier_nom'] = $file->getClientOriginalName();
            $validatedData['fichier_taille'] = $file->getSize();
            $validatedData['fichier_mime'] = $file->getMimeType();
        }
        
        // Génération d'une référence unique
        $validatedData['reference'] = 'ABS-' . date('Y') . '-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
        $validatedData['date_soumission'] = now();
        $validatedData['ip_address'] = $request->ip();
        $validatedData['user_agent'] = $request->userAgent();
        
        // Comptage des mots pour chaque section
        $wordCountFields = ['introduction', 'objectifs', 'methodes', 'resultats', 'conclusion', 'abstract_complet'];
        foreach ($wordCountFields as $field) {
            if (isset($validatedData[$field]) && $validatedData[$field]) {
                $wordCount = str_word_count(strip_tags($validatedData[$field]));
                $validatedData[$field . '_word_count'] = $wordCount;
            }
        }
        
        AbstractForm::create($validatedData);
        
        return redirect()->back()->with('success', 'Merci pour votre soumission. Votre abstract a été reçu avec succès. Un email de confirmation vous sera envoyé.');
    }
}
