<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class winner extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'customer_id',
        'bid_id',
        
    ];

    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class,'customer_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function bid(){
        return $this->belongsTo(Bid::class,'bid_id');
    }
}
