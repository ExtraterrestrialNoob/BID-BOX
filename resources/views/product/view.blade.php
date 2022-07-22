@extends('layouts.app')

@section('content')

@if(!is_null($product))


<div class="product_image_area">
<div class="container">
<div class="row s_product_inner">
<div class="col-lg-6">
<div class="owl-carousel owl-theme s_Product_carousel owl-loaded owl-drag">


<div class="owl-stage-outer"><div class='owl-stage'>
<img class="img-fluid" src="{{ asset('assets/images/product/'.$product->image_path) }}"alt="" data-pagespeed-url-hash="3058449467" >
</div></div><div class="owl-dots disabled"></div></div>
</div>
<div class="col-lg-5 offset-lg-1">
<div class="s_product_text">
<h3>{{$product->name}}</h3>
<h2>RS.{{number_format(round($product->price),2)}}</h2>
<ul class="list">
<li><a><span>Category</span> : {{$product->category}}</a></li>
</ul>
<p>{{$product->short_description}}</p>
<p></p>
<p>{!! nl2br($product->long_description) !!}</p>

<div class="card_area d-flex align-items-center">
<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>

@else
    <div class="alert alert-danger text-center" role="alert">
        <strong>{{ _('Product Not Found')}}</strong> 
    </div>
@endif
@endsection