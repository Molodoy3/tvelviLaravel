<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'message'
    ];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
