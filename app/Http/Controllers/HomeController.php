<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class HomeController extends Controller
{

    public function home()
    {
        $publications = Publication::latest()->limit(3)->get();
        return view('pages.home', compact('publications'));
    }


    // Publication detail page
    public function publication(Request $request, Publication $publication){

        // Incrémenter le compteur de vues
        // $publication->increment('views');
        
        // Charger les commentaires avec les utilisateurs
        // $publication->load(['comments.user', 'comments' => function($query) {
        //     $query->latest();
        // }]);
        
        // Charger le nombre de likes
        // $publication->loadCount(['likes', 'comments']);
        
        // Publications similaires (par catégorie ou tags)
        $publication_infos = $request-> $publication;
        // $relatedPublications = Publication::where('id', '!=', $publication_infos->id)
        //     ->where('category', $publication_infos->category)
        //     ->orWhere('titre', 'like', '%' . $publication_infos->titre . '%')
        //     ->limit(2)
        //     ->get();
        
        // return view('pages.publicationitem', compact('publication_infos', 'relatedPublications'));
        return view('pages.publicationitem', compact('publication_infos'));

    }

    // 
    public function services(){
        return view('pages.services');
    }
    public function contacts(){
        return view('pages.contacts');
    }
    public function about(){
        return view('pages.about');
    }
    
    // All publications page
    public function allpublications(){
        $publications = Publication::all();
        return view('pages.all_publications',compact('publications'));
    }





    public function back(){
        return redirect()->back();
    }
}
