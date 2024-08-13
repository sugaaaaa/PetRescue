<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Category extends Model
{
    protected $fillable = ['name', 'sex'];

    public function pets()
    {
        return $this->hasMany(Pets::class, 'category_id');
    }
    use HasFactory;
}