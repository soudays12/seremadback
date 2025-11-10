<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{



    public function store(Request $request)
    {
        try {
            // 1️⃣ Validation des données
            $request->validate([
                'titre' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);

            // 2️⃣ Transaction : on fait tout ou rien
            DB::transaction(function () use ($request) {
                // 📁 Récupération du fichier envoyé
                $file = $request->file('image');

                // 📄 Infos du fichier
                $nomOriginal = $file->getClientOriginalName();
                $taille = $file->getSize();
                $extension = $file->getClientOriginalExtension();

                // 🔠 Nom unique pour le stockage
                $nomFichier = time() . '_' . uniqid() . '.' . $extension;

                // 📦 Déplacement du fichier vers public/images
                $file->move(public_path('images'), $nomFichier);

                // 🧍 Créer et sauvegarder le candidat
                $publication = Publication::create([
                    'titre' => $request->titre,
                    'contenu' => $request->contenu,
                ]);

                // 🖼️ Créer l'image liée
                Image::create([
                    'nom' => $nomOriginal,
                    'taille' => $taille,
                    'format' => $extension,
                    'publication_id' => $publication->id,
                ]);
            });

            // ✅ Succès
            return redirect()->back()->with('success', 'Publication effectué avec succès !');

        } catch (ValidationException $e) {
            // ❌ Erreur de validation
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('error', 'Erreur de validation des données : ' . $e->getMessage());

        } catch (QueryException $e) {
            // ❌ Erreur de base de données
            \Log::error('Erreur DB lors de la création de la publication : ' . $e->getMessage());
            
            return redirect()->back()
                ->withInput()
                ->with('error', 'Erreur de base de données lors de la création de la publication ; ' . $e->getMessage());

        } catch (Exception $e) {
            // ❌ Erreur générale
            \Log::error('Erreur générale lors de la création de la publication: ' . $e->getMessage());
            
            return redirect()->back()
                ->withInput()
                ->with('error', 'Une erreur inattendue est survenue. Veuillez réessayer ; ' . $e->getMessage());
        }
    }




}
