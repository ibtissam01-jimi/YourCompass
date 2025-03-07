<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'image'
    ];


    public function services(){
        return $this->hasMany(Service::class);
    }

    public function guides(){
        return $this->hasMany(Guide::class);
    }
}
