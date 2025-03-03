<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'website',

    ];


    public function cities(){
        return $this->belongsTo(City::class);
    }
    public function categories(){
        return $this->belongsTo(Category::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }

    public function favoritedBy(){
        return $this->belongsToMany(User::class, 'favorites');
    }
}
