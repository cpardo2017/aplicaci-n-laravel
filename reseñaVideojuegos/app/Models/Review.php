<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Videogame;
use App\Models\User;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'score',
        'user_id'
    ];

    public function videogame(){
        return $this->belongsTo(Videogame::class,'id_videogame');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
