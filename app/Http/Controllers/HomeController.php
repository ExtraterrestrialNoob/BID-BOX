<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_products = Product::orderBy('created_at','DESC')->get();

        return view('welcome' , compact('all_products'));
    }

    // public function register($call)
    // {
    //     if($call=='vendor_login'){
    //         return view('/auth/register_vendor');
    //     }
    // }
}
