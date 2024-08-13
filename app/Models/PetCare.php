<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetCare extends Model
{
    use HasFactory;

    protected $table = 'petCare'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['name', 'address', 'contact', 'content', 'images'];
}