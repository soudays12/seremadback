<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        "nom",
        "taille", 
        "format",
        "publication_id",
    ];


     public function publication(){
        $this->BelongsTo(Publication::class);
    }
}
