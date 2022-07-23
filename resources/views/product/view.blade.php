@extends('layouts.app')

@section('content')

@if(!is_null($product))
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
            <div class="owl-carousel owl-theme s_Product_carousel owl-loaded owl-drag">


            <div class="owl-stage-outer">
                <div class='owl-stage'>
                    <img class="img-fluid" src="{{ asset('assets/images/product/'.$product->image_path) }}"alt="" data-pagespeed-url-hash="3058449467" >
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-5 offset-lg-1">
        <div class="s_product_text">
            <h3>{{$product->name}}</h3>
            <h2>RS.{{number_format(round($product->price),2)}}</h2>

            <ul class="list">
                <li><a><span>Category</span> : {{$category->name}}</a></li>
            </ul>
            <p>{{$product->short_description}}</p>
            <p>{!! nl2br($product->long_description) !!}</p>

            <div class="card_area d-flex align-items-center">

            @guest
            @else
                <form class="row g-3" method="POST" action="{{route('product.bid' , $product->id )}}" enctype="multipart/form-data">
                @csrf
                    <div class="col-auto">
                        <label for="amount" class="visually-hidden"></label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input  id="amount" name="amount" type="number" class="form-control" step="any"  placeholder="Enter Your Amount">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3"> BID NOW </button>
                    </div>
                </form>
            @endguest
            </div>
        </div>
    </div>
</div>



@else
    <div class="alert alert-danger text-center" role="alert">
        <strong>{{ _('Product Not Found')}}</strong> 
    </div>
@endif




@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




@if ($message = \Session::get('success'))
  <div class="alert alert-success text-justify">
    {{ $message }}
  </div>
@endif

@endsection