<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Publication;
use App\Models\Image;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use Exception;

class PublicationController extends Controller
{
    public function store(Request $request)
    {
        try {
            // validation
            $validated = $request->validate([
                'titre'   => 'required|string|max:255',
                'contenu' => 'required|string', // laisser text sans max si souhaité
                'image'   => 'nullable|image|max:2048',
            ]);

            DB::transaction(function () use ($validated, $request) {
                $file = $request->file('image');
                $nomOriginal = $taille = $extension = $nomFichier = null;

                if ($file) {
                    $nomOriginal = $file->getClientOriginalName();
                    $taille = $file->getSize();
                    $extension = $file->getClientOriginalExtension();
                    $nomFichier = time() . '_' . uniqid() . '.' . $extension;
                    // s'assurer que le dossier existe et est accessible
                    if (!is_dir(public_path('images'))) {
                        mkdir(public_path('images'), 0755, true);
                    }
                    $file->move(public_path('images'), $nomFichier);
                }

                $publication = Publication::create([
                    'titre'   => $validated['titre'],
                    'contenu' => $validated['contenu'],
                ]);

                if ($file && isset($nomFichier)) {
                    Image::create([
                        'nom'            => $nomOriginal,
                        'taille'         => $taille,
                        'format'         => $extension,
                        'fichier'        => $nomFichier,
                        'publication_id' => $publication->id,
                    ]);
                }
            });

            return redirect()->route('admin.publications.index')->with('success', 'Publication effectuée avec succès !');

        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('error', 'Erreur de validation');

        } catch (QueryException $e) {
            \Log::error('Erreur DB lors de la création de la publication : ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Erreur de base de données');

        } catch (Exception $e) {
            \Log::error('Erreur générale lors de la création de la publication: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Une erreur inattendue est survenue');
        }
    }
}
