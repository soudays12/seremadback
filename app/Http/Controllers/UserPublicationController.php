<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{Like,Comment};
use Illuminate\Database\QueryException;
use Exception;

class UserPublicationController extends Controller
{
    public function like(Request $request, $publication_id) 
    {
        $user = auth()->user();

        $existingLike = Like::where('user_id', $user->id)
            ->where('publication_id', $publication_id)
            ->first();

        if ($existingLike) {
            // Supprimer le like (unlike)
            $existingLike->delete();
            DB::table('publications')->where('id', $publication_id)->decrement('likes_count');
            return redirect()->back()->with('success', 'Like retiré.');
        } else {
            // Ajouter le like
            Like::create([
                'user_id' => $user->id,
                'publication_id' => $publication_id,
            ]);
            DB::table('publications')->where('id', $publication_id)->increment('likes_count');
            return redirect()->back()->with('success', 'Publication aimée.');
        }
    }




    public function comment(Request $request)
    {
        $user = auth()->user();
        
        $request->validate([
            'publication_id' => 'required|exists:publications,id',
            'message' => 'required|string|max:1000'
        ]);
        
        try {
            Comment::create([
                'user_id' => $user->id,
                'publication_id' => $request->publication_id,
                'message' => $request->message,
            ]);
            
            return redirect()->back()->with('success', 'Commentaire ajouté avec succès.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Erreur lors de l\'ajout du commentaire.');
        }
    }
    
    public function destroyComment(Comment $comment)
    {
        // Vérifier que l'utilisateur peut supprimer ce commentaire
        if (auth()->id() !== $comment->user_id) {
            return redirect()->back()->with('error', 'Vous ne pouvez pas supprimer ce commentaire.');
        }
        
        $comment->delete();
        return redirect()->back()->with('success', 'Commentaire supprimé avec succès.');
    }
}
