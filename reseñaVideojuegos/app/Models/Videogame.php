<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Image;
use App\Models\StockImage;
use App\Models\Review;

class Videogame extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre',
        'fecha_lanzamiento'
    ];

    protected $dates = ['fecha_lanzamiento'];

    public function image(){
        return $this->morphOne(Image::Class, 'imageable');
    }

    public function stockImages(){
        return $this->hasMany(StockImage::Class);
    }

    public function reviews(){
        return $this->hasMany(Review::Class);
    }
}
