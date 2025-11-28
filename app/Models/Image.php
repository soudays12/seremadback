<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        "nom",
        "taille", 
        "format",
        "fichier",
        "publication_id",
    ];


    public function publication(){
        return $this->belongsTo(Publication::class);
    }
}
