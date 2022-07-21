<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'total_bid',
        'expired_at',
        'rating',
        'total_rating',
        'review',
        'short_description',
        'long_description',
        'specification',
    ];

    public $timestamps = true;


}
