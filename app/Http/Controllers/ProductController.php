<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Bid;
use App\Http\Middleware\Role;
use App\Rules\FileTypeValidate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
    public function index(Request $request)
    {
        //change paginete to show how many products do you want to show in product page 
        $all_products = Product::query();
        if(!empty($_GET['category'])){
            $slugs=explode(',',$_GET['category']);
            $cat_ids=Category::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            $all_products=$all_products->whereIn('category_id',$cat_ids)->orderby('created_at','DESC')->paginate(9);
            // $all_products = Product::where('Is_active',1)->orderBy('created_at','DESC')->paginate(9);
        }

        else{
            $all_products = Product::where('Is_active',1)->orderBy('created_at','DESC')->paginate(9); 
        }

        // $all_products = Product::where('Is_active',1)->orderBy('created_at','DESC')->paginate(9);
        $category = Category::where('status',1)->with('products')->orderBy('name','ASC')->get();
        return view('product.products', compact('all_products','category'));
        // dd($all_products,$category);
    }

    public function products_by_user($id)
    {
        //$all_products = Product::where([['user_id', '=', $id],['Is_active', '=',1]])
        $all_products = Product::where([['user_id', '=', $id]])
                        ->orderBy('created_at','DESC')->get();
        for($i = 0;$i < sizeof($all_products);$i++){
            $bid_count = Bid::where('product_id',$all_products[$i]->id)->count();
            $max_bid = Bid::where('product_id',$all_products[$i]->id)->orderBy('amount','DESC')->first();
            $status = $all_products[$i]->expired_at > now() ? 'Active' : 'Expired';
            if($all_products[$i]->expired_at > now()){
                $winner = 'No Winner Announced';
            }elseif($max_bid != NULL){
                $winner =  User::where('id',$max_bid->user_id)->first()->name;
            }else{
                $winner = 'No Bids Placed';
            }

             //Overite Status and Winners if Product Suspended
            $status = $all_products[$i]->Is_active == 0 ? 'Suspended' : $status;
            $winner = $all_products[$i]->Is_active == 0 ? 'Suspended' : $winner;

            $all_products[$i]->bid_count = $bid_count;
            $all_products[$i]->max_bid = $max_bid != NULL ?  $max_bid->amount : NULL ;
            $all_products[$i]->status = $status;
            $all_products[$i]->winner = $winner;
        }

        return view('product.myproducts', compact('all_products'));        

    }


    public function test($id)
    {
    
        $all_products = Product::where('user_id', $id)
                   ->orderBy('created_at','DESC')->get();
        for($i = 0;$i < sizeof($all_products);$i++){
                $bid_count = Bid::where('product_id',$all_products[$i]->id)->count();
                $max_bid = Bid::where('product_id',$all_products[$i]->id)->orderBy('amount','DESC')->first();
                $status = $all_products[$i]->expired_at > now() ? 'Active' : 'Expired';
                if($all_products[$i]->expired_at > now()){
                    $winner = 'No Winner Announced';
                }elseif($max_bid != NULL){
                    $winner =  User::where('id',$max_bid->user_id)->first()->name;
                }else{
                    $winner = 'No Bids Placed';
                }

                //Overite Status and Winners if Product Suspended
                $status = $all_products[$i]->Is_active == 0 ? 'Suspended' : $status;
                $winner = $all_products[$i]->Is_active == 0 ? 'Suspended' : $winner;

                $all_products[$i]->bid_count = $bid_count;
                $all_products[$i]->max_bid = $max_bid;
                $all_products[$i]->status = $status;
                $all_products[$i]->winner = $winner;
         }
        return compact('all_products');        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_category = Category::all();
        $maxdate = Carbon::now()->setTime(0, 0, 0)->addDays(14)->format('Y-m-d');
        $nowdate = Carbon::now()->format('Y-m-d');

        return view('product.create', compact('all_category','maxdate','nowdate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request); 
        $product = new product();
        $this->savedata($request, $product);
        return redirect()->back()->with(\Session::flash('success', 'Data inserted Successfully.'));
    }

    protected function validator($data){

        
        $data->validate([
            'name'                  => 'required',
            'price'                 => 'required',
            'expired_at'            => 'required',
            'short_description'     => 'required',
            'long_description'      => 'required',
            'specification'         => 'nullable',
            'category'              => 'required',
            'image'                 => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:9096',
        ]);
    }


    public function savedata($request , $product){

        if ($request->hasFile('image')) {
            //if (FileTypeValidate($request->image, ['jpeg', 'jpg', 'png']))
            try{
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('storage/assets/images/product'), $filename);
                $request->image =  'assets/images/product/'.$filename;
            }catch (\Exception $exp) {
                $notify[] = ['error', 'Image could not be uploaded.'];
                return 'image upload error';
                }   
    }


        $product->name = $request->name;
        $product->price = $request->price;
        //$new->total_bid = $request->total_bid;
        $product->expired_at = $request->expired_at;
        //$new->rating = $request->rating;
        //$new->total_rating = $request->total_rating;
        //$new->review = $request->review;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->specification = $request->specification;
        $product->image_path = $request->image;
        $product->category_id=$request->category;
        $product->user_id = Auth::user()->id;
        $product->save();

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$user = User::with()
        $product = Product::where('id',$id)->first();
        $ActiveStatus = 0;
        if($product != null){
            if($product->Is_active == 0){
                $product = NULL;
                return view('product.view', compact('product','ActiveStatus'));
            }
            if(isset($product)){
                $ActiveStatus = 1;
                $category = Category::where('id',$product->category_id)->first();
                $bid_data = Bid::where('product_id',$id)->take(10)->orderBy('amount', 'DESC')->get(); //https://stackoverflow.com/questions/15229303/is-there-a-way-to-limit-the-result-with-eloquent-orm-of-laravel
                $max_bid = $bid_data->max('amount');
                $bid_count = Bid::where('product_id',$id)->count();
                $bid_info =array($bid_count,$max_bid,$bid_data);
    
                return view('product.view', compact('product','category','bid_info','ActiveStatus'));
            }
        }

        else{
            // $ActiveStatus = 1;
            // dd("not a");
            // $errors="This pro";
            // return view('product.view', compact('errors','ActiveStatus'));
            return redirect()->back()->with(\Session::flash('error', 'product id mismatch'));

        }
      
        // return view('product.view', compact('product','ActiveStatus'));
        
    }
    //for update bid and table ajax
    public function getbidstatus($id){
        $product = Product::where('id',$id)->first();
        if(isset($product)){
            $bid_data = Bid::where('product_id',$id)->orderBy('amount', 'DESC')->take(10)->select('amount','created_at')->get(); 
            $bid_count = Bid::where('product_id',$id)->count();
            $max_bid = $bid_data->max('amount');

            //$bid_info =array($bid_count,$max_bid,$bid_data);
            // return response()->json($bid);
            return response()->json(array(
                'bid_info' => $bid_data, 
                'max_bid' => $max_bid,
                'bid_count' => $bid_count,
            ));
        }
        // $msg = "This is a simple message.";
        // return response()->json(array('msg'=> $msg), 200);
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
        $product = Product::where('id',$id)->first();
        if(isset($product)){
            $category = Category::where('id',$product->category_id)->first();
            $user_info = User::where('id', $product->user_id)->first()->name;
            //$bid_data = Bid::where('product_id',$id)->orderBy('amount', 'DESC')->take(10)->get(); //https://stackoverflow.com/questions/15229303/is-there-a-way-to-limit-the-result-with-eloquent-orm-of-laravel
            //$max_bid = $bid_data->max('amount');
            $bid_count = Bid::where('product_id',$id)->count();
            $all_category = Category::all();

            //date operations
            $expire_date =new Carbon($product->expired_at);
            $product->expired_at = $expire_date->format('Y-m-d');
            $maxdate = Carbon::now()->setTime(0, 0, 0)->addDays(14)->format('Y-m-d');
            $nowdate = Carbon::now()->format('Y-m-d');

            return view('product.edit', compact('product','category','user_info','bid_count','all_category','maxdate','nowdate'));
        }

        return view('product.edit');
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
        $product = Product::find($id);
        if($product){

            $product->name = $request->name;
            $product->expired_at = $request->expired_at;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->specification = $request->specification;
            $product->category_id=$request->category;
            $product->update();

            return redirect()->back()->with(\Session::flash('success', 'Image inserted Successfully.'));
        }else{
            return redirect()->back()->with(\Session::flash('error', 'product id mismatch'));
        }

    }

    public function updateimage(Request $request, $id)
    {
        //
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:9096',
        ]);

        $product = Product::find($id);
        $image =  public_path('storage/'.$product->image_path);
        if($product){
            if(File::exists($image)){
               File::delete($image);
            }
            if ($request->hasFile('image')) {
                //if (FileTypeValidate($request->image, ['jpeg', 'jpg', 'png']))
                try{
                    $file= $request->file('image');
                    $filename= date('YmdHi').$file->getClientOriginalName();
                    $file-> move(public_path('storage/assets/images/product'), $filename);
                    $request->image = 'assets/images/product/'.$filename;
                }catch (\Exception $exp) {
                    $notify[] = ['error', 'Image could not be uploaded.'];
                    return 'image upload error';
                    }   
                }
            
            $product->image_path = $request->image;
            $product->update();
            return redirect()->back()->with(\Session::flash('success', 'Image inserted Successfully.'));
        }else{
            return redirect()->back()->with(\Session::flash('error', 'product id mismatch'));
        }
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
        $product = Product::where("id",$id)->first();
        if($product){
            // if($product->user_id == Auth::user()->id){
            //     $image =  ('public/storage/'.$product->image_path);
            //     if (Storage::exists($image)){
            //         Storage::delete($image);
            //     }
            //     Product::where("id",$id)->delete();
            //     // BId::where("product_id",$id)->delete()->all();
            //     return response()->json(null);
            // }
            if($product->user_id == Auth::user()->id){
                $image =  public_path('storage/'.$product->image_path);
                if (File::exists($image)){
                    File::delete($image);
                }

                Product::where("id",$id)->delete();
                return response()->json(null);
            }
            else{
                echo "USer mismatch";
            }
        }else{
            echo "product not found";
        }
    }


    public function bid(Request $request, $pid)
    {
        //
        $current_price = Bid::where('product_id',$pid)->get()->max('amount');
        if(!isset($current_price)){
            $current_price = Product::where('id',$pid)->first()->price;
        }
        
        $request->validate([
            'amount'      => 'required | numeric|gt:'.$current_price,
        ]);

        $count = Bid::where('product_id',$pid)->count()+1;
        $previous_bids = Bid::where('product_id',$pid)->where('user_id',Auth::User()->id)->where('status',0)->get();
        foreach($previous_bids as $i){
            $i->status = 1;
            $i->update();
        }
        Bid::create([
            'product_id' =>  $pid,
            'user_id' => Auth::user()->id,
            'amount' => $request->amount,
            'status' => 0,
        ]);
        Product::where('id',$pid)->update(['total_bid'=>$count]);
       

        // return back()->with(\Session::flash('success', 'Bid Placed Successfully.'));
        return response()->json(['success'=>'Bid Placed Successfully.']);
    }

    public function product_filter(Request $request){
        // dd($request->all());
        $data = $request->all();

        $caturl = '';
        if(!empty($data['category'])){
            foreach($data['category'] as $category){
                if(empty($caturl)){
                    $caturl .= '&category='.$category;
                }

                else{
                    $caturl .= ','.$category;
                }
            }
        }
        return redirect()->route('product.product', $caturl);
    }

    // public function autosearch(Request $request){
    //     // dd($request->all());
    //     $query=$request->get('term', '');
    //     $products=Product::where('name','LIKE','%'.$query.'%')->get();
    //     $data=array();
    //     foreach($products as $product){
    //         $data[]=array('value'=>$product->name,'id'=>$product->id);
    //     }

    //     if(count($data)){
    //         return $data;
    //     }

    //     else{
    //         return ['value'=>'NO Result Found','id'=>''];
    //     }
    // }

    public function search(Request $request){
        $query=$request->input('query');
        $all_products=Product::where('name','LIKE','%'.$query.'%')->orderBy('id','DESC')->paginate(9);
        $category = Category::where('status',1)->with('products')->orderBy('name','ASC')->get();
        return view('product.products',compact('all_products','category'));
    }
}
