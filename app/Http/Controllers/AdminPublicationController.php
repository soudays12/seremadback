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
        $publications = Publication::latest()->paginate(10);
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
                'contenu' => 'required|string',
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
                    $file->move(public_path('images'), $nomFichier);
                }

                $publication = Publication::create([
                    'titre'   => $validated['titre'],
                    'contenu' => $validated['contenu'],
                ]);

                if ($file) {
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
        return view('admin.publications.show', compact('publication'));
    }

    public function edit(Publication $publication)
    {
        return view('admin.publications.edit', compact('publication'));
    }

    public function update(Request $request, Publication $publication)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body'  => 'required|string',
        ]);

        $publication->update($data);

        return redirect()->route('admin.publications.index')->with('success', 'Publication mise à jour.');
    }

    public function destroy(Publication $publication)
    {
        $publication->delete();
        return back()->with('success', 'Publication supprimée.');
    }
}