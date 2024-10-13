<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'message',
        'approval'
    ];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
    protected static function booted()
    {
        static::addGlobalScope('approved', function (Builder $builder) {
            $builder->where('approval', 1);
        });
    }
}
