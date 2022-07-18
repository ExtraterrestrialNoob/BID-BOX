<?php

namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        return Voyager::view('voyager::index');
      }
}
