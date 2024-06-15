<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'link_wa',
        'link_ig',
        'phone',
        'sales_name',
        'sales_email',
        'address_office',
        'link_maps',
        'hero'
    ];
}
