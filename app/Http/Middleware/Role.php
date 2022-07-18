<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Auth\Middleware\Role as Middleware;
use Illuminate\Support\Facades\Auth;

class Role {

  public function handle($request, Closure $next, String $role) {
    if (!Auth::check()) // This isnt necessary, it should be part of your 'auth' middleware
      return redirect('/home');

    $user = Auth::user();
    if($user->role_id == $role)
      return $next($request);

    return redirect('/home');
  }
}