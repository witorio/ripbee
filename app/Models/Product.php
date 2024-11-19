<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_code',
        'category',
        'status',
        'title',
        'data',
        'shares_left',
        'owners',
    ];

    protected $casts = [
        'data' => 'array',
        'owners' => 'array',
    ];
}