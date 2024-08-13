<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetGrooming extends Model
{
    use HasFactory;

    protected $table = 'pet_groomings';
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