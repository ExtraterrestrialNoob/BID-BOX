<?php

namespace App\Http\Middleware;

use App\Models\winner;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class payment
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
        $wins = winner::where('id',$request->route('wid'))->first();
            if($wins->customer_id == $user){
                return $next($request);
            }
        else{
            abort(403);
        }
    }
}
