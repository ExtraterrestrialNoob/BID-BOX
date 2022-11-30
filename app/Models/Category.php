<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Category extends Model
{
    public function products(){
        return $this->hasMany(Product::class,'category_id','id')->where(['is_active'=>1 , 'is_expired'=> 0]);
    }
}


