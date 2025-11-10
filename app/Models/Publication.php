<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    
    protected $fillable = [
        'titre',
        'contenu',
    ];

     public function images(){
        $this->hasMany(Image::class);
    }
    public function commentaires(){
        $this->hasMany(Commentaire::class);
    }

}
