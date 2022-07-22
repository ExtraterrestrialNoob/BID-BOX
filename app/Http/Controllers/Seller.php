<?php

namespace App\Http\Controllers\Seller;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Seller extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        return view('seller/dashboard');
      }
}
