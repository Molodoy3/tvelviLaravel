<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'altTitle',
        'description',
        'image',
        'slug',
        'how-title',
        'how-description',
    ];
    public function getImageAttribute($value)
    {
        return $value ? Storage::disk('public')->url('services/' . $value) : null;
    }
    public function getDescriptionAttribute($value)
    {
        return Str::ucfirst($value);
    }
    public function steps():HasMany
    {
        return $this->hasMany(Step::class);
    }
}
