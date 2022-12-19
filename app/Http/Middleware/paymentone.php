<?php

namespace App\Http\Middleware;

use App\Http\Middleware\payment as MiddlewarePayment;
use App\Models\Payment;
use App\Models\winner;
use Closure;
use Illuminate\Http\Request;

class paymentone
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $temp = winner::where('id',$request->route('wid'))->first();
        // dd($temp);
        $onetime = Payment::where('product_id',$temp->product->id)->first();
        // dd($onetime);
        // if ($temp == null){dd("done");}
        if(   $onetime == null ){
            // $onetime = 
            // dd($temp);
            // dd(echo'dfdf');
            return $next($request);
        }
        else{
            abort(403);
        }
    }
}
