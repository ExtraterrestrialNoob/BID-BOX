<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\bid;

class Product extends Model
{
    //use HasFactory;

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
        'image_path',
    ];

    public $timestamps = true;


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function bid()
    {
        return $this->hasMany(Bid::class,'product_id');
    }

}
