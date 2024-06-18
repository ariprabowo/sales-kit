<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Env;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'image_logo',
        'image',
        'brocure',
        'start_price',
        'is_cooming_soon'
    ];

    protected $appends = ['brocure_url', 'image_url', 'logo_url', 'price_formatted'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getBrocureUrlAttribute()
    {
        if (!empty($this->brocure)) {
            return env('APP_URL').'/storage/'.$this->brocure;
        } else {
            return null;
        }
    }

    public function getImageUrlAttribute()
    {
        return env('APP_URL').'/storage/'.$this->image;
    }

    public function getLogoUrlAttribute()
    {
        return env('APP_URL').'/storage/'.$this->image_logo;
    }

    public function getPriceFormattedAttribute()
    {
        return 'IDR '.number_format($this->start_price);
    }
}
