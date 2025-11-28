<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\DB;



class AdminPublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::with('images')->latest()->paginate(10);
        return view('admin.publications.index', compact('publications'));
    }

    public function create()
    {
        return view('admin.publications.create');
    }


    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'titre'   => 'required|string|max:255',
                'contenu' => 'required|string|max:10000',
                'images'   => 'nullable|array|max:5',
                'images.*' => 'image|mimes:jpeg,jpg,png,gif,webp|max:2048',
            ]);

            DB::transaction(function () use ($validated, $request) {
                $publication = Publication::create([
                    'titre'   => $validated['titre'],
                    'contenu' => $validated['contenu'],
                ]);

                if ($request->hasFile('images')) {
                    foreach ($request->file('images') as $file) {
                        // Validation sécurisée des extensions
                        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                        $extension = strtolower($file->getClientOriginalExtension());
                        
                        if (!in_array($extension, $allowedExtensions)) {
                            throw new \Exception('Type de fichier non autorisé');
                        }
                        
                        // Vérification du type MIME
                        $allowedMimes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
                        if (!in_array($file->getMimeType(), $allowedMimes)) {
                            throw new \Exception('Type MIME non autorisé');
                        }
                        
                        $nomOriginal = basename($file->getClientOriginalName());
                        $taille = $file->getSize();
                        $nomFichier = time() . '_' . uniqid() . '.' . $extension;
                        $file->move(public_path('images'), $nomFichier);

                        Image::create([
                            'nom'            => $nomOriginal,
                            'taille'         => $taille,
                            'format'         => $extension,
                            'fichier'        => $nomFichier,
                            'publication_id' => $publication->id,
                        ]);
                    }
                }
            });

            return redirect()->route('admin.publications.index')->with('success', 'Publication effectuée avec succès !');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput()->with('error', 'Erreur de validation');
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error('DB error: '.$e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Erreur de base de données');
        } catch (\Throwable $e) {
            \Log::error('Unexpected error: '.$e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Erreur inattendue');
        }
    }




    public function show(Publication $publication)
    {
        $publication->load('images');
        return view('admin.publications.show', compact('publication'));
    }

    public function edit(Publication $publication)
    {
        $publication->load('images');
        return view('admin.publications.edit', compact('publication'));
    }

    public function update(Request $request, Publication $publication)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu'  => 'required|string|max:10000',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,jpg,png,gif,webp|max:2048',
        ]);

        $publication->update([
            'titre' => $validated['titre'],
            'contenu' => $validated['contenu'],
        ]);
        
        // Ajouter de nouvelles images si présentes
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                // Validation sécurisée des extensions
                $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                $extension = strtolower($file->getClientOriginalExtension());
                
                if (!in_array($extension, $allowedExtensions)) {
                    throw new \Exception('Type de fichier non autorisé');
                }
                
                // Vérification du type MIME
                $allowedMimes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
                if (!in_array($file->getMimeType(), $allowedMimes)) {
                    throw new \Exception('Type MIME non autorisé');
                }
                
                $nomOriginal = basename($file->getClientOriginalName());
                $taille = $file->getSize();
                $extension = strtolower($file->getClientOriginalExtension());
                $nomFichier = time() . '_' . uniqid() . '.' . $extension;
                $file->move(public_path('images'), $nomFichier);

                Image::create([
                    'nom' => $nomOriginal,
                    'taille' => $taille,
                    'format' => $extension,
                    'fichier' => $nomFichier,
                    'publication_id' => $publication->id,
                ]);
            }
        }

        return redirect()->route('admin.publications.show', $publication)->with('success', 'Publication mise à jour avec succès.');
    }

    public function destroy(Publication $publication)
    {
        $publication->delete();
        return back()->with('success', 'Publication supprimée.');
    }
}