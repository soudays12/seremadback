<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    
    protected $fillable = [
        'titre',
        'contenu',
    ];
    
    protected $casts = [
        'likes_count' => 'integer',
    ];
    public function images(){
        return $this->hasMany(Image::class, 'publication_id');
    }
    
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function likes(){
        return $this->hasMany(Like::class);
    }

}

