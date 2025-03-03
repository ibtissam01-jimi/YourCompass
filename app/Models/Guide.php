<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'cin',
        'adress',
        'email',
        'phone_number',
        'photo'
    ];

    public function cities(){
        return $this->belongsTo(City::class);
    }
}
