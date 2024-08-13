<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['title', 'images', 'description'];

    use HasFactory;

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}