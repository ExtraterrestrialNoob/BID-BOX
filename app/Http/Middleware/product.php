<?php

namespace App\Http\Middleware;

use App\Models\Product as ModelsProduct;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Products;

class product
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
        $user = Auth::user()->id;
        $product = ModelsProduct::where('id',$request->route('id'))->first();
        if($user == $product->user_id){

            return $next($request);
        }
        else{
            abort(403);
        }
    }
}
