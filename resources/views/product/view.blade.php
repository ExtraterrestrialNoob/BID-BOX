@extends('product.layout.app')

@section('content')

@if(!is_null($product))
<!-- <div class="product_image_area">
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
    </div> -->




    <div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <img src="{{ asset('assets/images/product/'.$product->image_path) }}" class="img-fluid">

                        </div>
						
						<!-- <div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div> -->
						<!-- <ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul>
						 -->
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$product->name}}</h3>
                        <h4><span>Category</span> : {{$category->name}}</h4>
						<div class="rating">
							<span class="review-no">Total BIDs : {{ $bid_info[0] }}</span>
						</div>
						<p class="product-description"><textarea cols='40' rows='20'>{!! nl2br($product->long_description) !!}</textarea></p>
						<h4 class="price">Current Bid Price: <span>{{ $bid_info[1] }}</span></h4>
						<div class="action">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




    <!-- <div class="col-lg-5 offset-lg-1">
        <div class="">
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
                                <div class="input-group-text">Rs</div>
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
</div> -->



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