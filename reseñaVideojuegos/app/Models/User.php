<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Image;
use App\Models\Review;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'admin_since'
    ];

    public function image(){
        return $this->morphOne(Image::Class, 'imageable');
    }

    public function reviews(){
        return $this->hasMany(Review::Class);
    }

    public function getIsAdminAttribute(){
        if ($this->admin_since != null && $this->admin_since->isBefore(now())){
            return true;
        }
        return false;
    }

    public function getProfileImageAttribute(){
        if($this->image == null){
            return 'https://www.gravatar.com/avatar/404?d=mp';
        }

        return $this->image->path;
    }

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
}
