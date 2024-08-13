<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetParks extends Model
{
    use HasFactory;

    protected $table = 'pet_parks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 
        'address', 
        'phoneNumber', 
        'email', 
        'openDay', 
        'timeOpen',  
        'content', 
        'location', 
        'images'
    ];
}