<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'prenom',
        'email',
        'password',
    ];

     public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function likes(){
        return $this->hasMany(Like::class);
    }

    
   
    protected $hidden = [
        'password',
        'remember_token',
    ];

   
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
