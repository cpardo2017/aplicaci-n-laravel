<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\videogame;

class StockImage extends Model
{
    protected $fillable = [
        'path',
        'videogame_id'
    ];
    use HasFactory;

    public function videogame(){
        return $this->belongsTo(videogame::class,'id_videogame');
    }
}
