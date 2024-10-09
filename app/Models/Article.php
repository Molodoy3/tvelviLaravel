<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'created_at'
    ];
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('d.m.Y');
    }
    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::parse($value)->format('d.m.y') : null;
    }
    public function getImageAttribute($value)
    {
        return $value ? Storage::disk('public')->url('articles/' . $value) : null;
    }
    use HasFactory;
}
