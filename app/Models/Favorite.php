<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $table = 'favorites';

    protected $fillable = ['user_id', 'blog_id'];

    public function blog()
    {
        return $this->hasMany(Blog::class, 'blog_id');
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}