<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Hash, Validator};
use App\Http\Requests;
use App\Models\User;

class UserController extends Controller
{

    //inscription de l'utilisateur
    public function register(Request $request) {
        // Validation des données de la requête
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        // Création de l'utilisateur
        $user = User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
 
        // Redirection après l'inscription
        return redirect()->route('auth.login')->with('success', 'Inscription réussie !');
    }
}
