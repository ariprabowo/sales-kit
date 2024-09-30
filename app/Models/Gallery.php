<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'ordered',
        'image'
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return env('APP_URL').'/storage/'.$this->image;
    }
}
