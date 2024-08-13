<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    protected $table = 'adoptions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'pet_id', 'status', 'name', 'position', 'email', 'phone', 'address',
        'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pet()
    {
        return $this->belongsTo(Pets::class);
    }

}