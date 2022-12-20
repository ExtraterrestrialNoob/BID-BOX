<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\winner;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_data = Auth::user();
        if($user_data->role_id == 3){
            $all_products = Product::orderBy('created_at','DESC')
                   ->where('user_id', $user_data->id)->get();

            return view('user.view', compact('user_data','all_products'));
        }

        return view('user.view', compact('user_data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // $user = DB::table('users')
        //         ->select('name','email','avatar')
        //         ->where('id', '=', $id)
        //         ->get();

        $user_data = User::where('id',$id)->first();
        $all_products = Product::orderBy('created_at','DESC')
                   ->where('user_id', $id)->get();

        return view('user.view' , compact('user_data', 'all_products'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $user_data = Auth::user();
       // $user_data = User::where('id',$id)->first();

        return view('user.edit' , compact('user_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function update(Request $request, $id)
    // {
    //     //
    // }
    //update profile
    public function update(Request $request,$id)
    {
        // if($request->name != Auth::user()->name and $request->tpno != Auth::user()->tpno and $request->email != Auth::user()->email){
            $request->validate([
                // 'name' => [ 'string', 'max:255','unique:users'],
                // 'email' => [ 'string', 'email', 'max:255', 'unique:users'],
                
                // 'nic' => [ 'string', 'max:12','min:10', 'unique:users'],
                // 'type'=>['integer','between:2,3'],
                // 'tpno'=>['string','max:10','min:10','unique:users'],
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:9096',
            ]);

            if ($request->hasFile('image')) {
                //if (FileTypeValidate($request->image, ['jpeg', 'jpg', 'png']))
                try{
                    $file= $request->file('image');
                    $filename= date('YmdHi').$file->getClientOriginalName();
                    $file-> move(public_path('storage/assets/images/user'), $filename);
                    $request->image = '/assets/images/user/'.$filename;
                }catch (\Exception $exp) {
                    $notify[] = ['error', 'Image could not be uploaded.'];
                    return 'image upload error';
                    }   
            }

            $user=User::find($id);
            $user->name = $request->input('name');
            $user->avatar = $request->image;
            $user->update();
            return redirect()->back()->with(\Session::flash('success', 'Data inserted Successfully.'));

        // }
        
        
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

    public function history($id){
        $history = Bid::where('user_id',"=",Auth::User()->id)->orderBy('created_at','DESC')->get();
        $win = winner::where('customer_id',Auth::User()->id)->with('product','bid')->get();
        // echo($win);
        if($history){
            foreach($history as $bid){
                $product_details = Product::where("id",$bid->product_id)->select('name','price')->first();
                if($product_details){
                    $bid->product_name = $product_details->name;
                    $bid->start_price = $product_details->price;
                }else{
                    $bid->product_name = "Product not found !";
                    $bid->start_price = "Product not found !";
                }
                
                $max_bid_on_product = Bid::where('product_id',$bid->product_id)->orderBy('amount','DESC')->first();
                if($max_bid_on_product){
                    $bid->max_bid = $max_bid_on_product->amount;
                    $max_bid_user = $max_bid_on_product->user_id;
                    if($bid->status == 1){
                        $bid->status = "Suspended";
                    }elseif($max_bid_on_product->id == $bid->id){
                        $bid->status = "Winning";
                    }else{
                        $bid->status = "Losing";
                    }
                }

                
                
            }//foreach
        }

        // echo $history;
        // for($i=0; $i<sizeof($histry); $i++){
        //     $product = Product::where('id',$histry[$i]->product_id)->select('name','price')->first();
        //     // echo $product;
        // }
        // echo $histry;
       return view('user.history', compact('history','win'));
        // dd($histry);
    }

    public function win($id){
        $bidinfo = Bid::where('user_id','=',$id);
    }
}
