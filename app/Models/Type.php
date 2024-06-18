<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'product_id',
        'image',
    ];

    protected $appends = ['fullname'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function getFullnameAttribute() {
        return $this->name.' - IDR '.number_format($this->price);
    }
}
