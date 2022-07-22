<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Category extends Model
{
    public function Category(){
        return $this->belongsTo(Product::class);
    }
}


