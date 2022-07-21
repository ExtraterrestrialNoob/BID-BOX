<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Storage;
use App\Http\Rules\FileTypeValidate;

class ProductController extends Controller
{

    public function __construct()
    {
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $imgValidation = 'required')
    {
        //  // validate 

        echo $request->name;
        
        //  if ($request->hasFile('image')) {
        //     if (FileTypeValidate($request->image, ['jpeg', 'jpg', 'png'])){
        //     try {
        //         $request->image = Storage::putFile('products', $request->file('image'));;
        //     } catch (\Exception $exp) {
        //         $notify[] = ['error', 'Image could not be uploaded.'];
        //         return back()->withNotify($notify);
        //     }
        // }   
        // }

        //  $request->validate([
        //     'name' => 'required',
        //     'price' => 'required|numeric|gte:0',
        //     'expired_at' => 'required',
        //     'short_description'     => 'required',
        //     'long_description'      => 'required',
        //     'specification'         => 'nullable|array',
        //     'image'            => [$imgValidation,'image', new FileTypeValidate(['jpeg', 'jpg', 'png'])],
        // ]);


        // //
        // $new = new Product;
        // $new->name = $request->name;
        // $new->price = $request->price;
        // $new->total_bid = $request->total_bid;
        // $new->expired_at = $request->expired_at;
        // $new->rating = $request->rating;
        // $new->total_rating = $request->total_rating;
        // $new->review = $request->review;
        // $new->short_description = $request->short_description;
        // $new->long_description = $request->long_description;
        // $new->specification = $request->specification;
        // $new->image = $request->image;
        // $new->save();

        // return "add success";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
