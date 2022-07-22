<?php

namespace App\Http\Controllers\Bidder;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bidder extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        return view('bidder/dashboard');
      }
}
