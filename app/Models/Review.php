<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable= [
        'content',
        'rating'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function services(){
        return $this->belongsTo(Service::class);
    }
    public function guides(){
        return $this->belongsTo(Guide::class);
    }
}
