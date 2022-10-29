<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Product;
use App\Models\winner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class cron extends Controller
{
    public function expire(){
        $temps = Product::all();
        $current_time = Carbon::now()->toDateTimeString();
        foreach($temps as $temp){
            if ($temp->expired_at < $current_time AND $temp->is_expired == 0 AND $temp->is_winner_selected == 0){
 
                $bid = Bid::where('product_id',$temp->id)->orderBy('amount','DESC')->first();

                 winner::create([
                    'product_id' => $temp->id,
                    'customer_id' => $bid->user_id,
                    'bid_id' => $bid->id,
                ]);

                $temp->is_expired = 1;
                $temp->is_winner_selected = 1;
                $temp->update();
            }

        }

    }
}
