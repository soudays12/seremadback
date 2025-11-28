<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function destroy(Image $image)
    {
        // Supprimer le fichier physique
        if (file_exists(public_path('images/' . $image->fichier))) {
            unlink(public_path('images/' . $image->fichier));
        }
        
        // Supprimer l'enregistrement en base
        $image->delete();
        
        return redirect()->back()->with('success', 'Image supprimée avec succès.');
    }
}