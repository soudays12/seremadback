<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class HomeController extends Controller
{

    public function home()
    {
        $publications = Publication::with('images')->latest()->limit(3)->get();
        return view('pages.home', compact('publications'));
    }


    public function publication(Request $request, Publication $publication){
        // Charger la publication avec ses images et commentaires
        $publication->load(['images', 'comments.user']);
        
        // Incrémenter le compteur de vues
        $publication->increment('views');
        
        $publication_infos = $publication;
        
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
        $publications = Publication::with('images')->latest()->get();
        return view('pages.all_publications',compact('publications'));
    }

    public function back(){
        return redirect()->back();
    }
}
