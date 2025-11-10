<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = [
        'user_id',
        'publication_id',
        'message',
        'user_id',
    ];


    public function user(){
        $this->BelongsTo(User::class);
    }

    public function publication(){
        $this->BelongsTo(Publication::class);
    }
}
