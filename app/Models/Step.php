<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Step extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'number',
        'title',
        'description',
        'image',
        'executed',
        'id_service'
    ];
    //Аксессор для преоброзования поля при получении, тут мы картинку преоброзовваем в ссылку
    public function getImageAttribute($value)
    {
        return $value ? Storage::disk('public')->url('steps/' . $value) : null;
    }
    public function service(): BelongsTo{
        return $this->belongsTo(Service::class, 'id_service');
    }
}
