@extends('product.layout.app')

@section('content')



{{-- if the product found and returned to blade from controller --}}
@isset($product)
<div class="container">
    <div class="card">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <img src="{{ asset('assets/images/product/'.$product->image_path) }}" class="img-fluid">
                        </div>
          </div>
          <div class="details col-md-6">

            <h3 class="product-title">{{$product->name}}</h3>
                <h4><span>Category</span> : {{$category->name}}</h4>

            <div class="rating">
              <span class="review-no">Total BIDs : {{ $bid_info[0] }}</span>
            </div>

            <p class="product-description"><textarea cols='40' rows='10'>{!! nl2br($product->long_description) !!}</textarea></p>
            @if($bid_info[1]>$product->price)
                    <h4 class="price">Current Bid Price: <span>{{ number_format((float)$bid_info[1], 2, '.', '') }}</span></h4>
            @else
                    <h4 class="price">Price Start: <span>{{ number_format((float)$product->price, 2, '.', '')}}</span></h4>
            @endif
            
            <div class="card_area d-flex align-items-center">

            @auth {{-- Check if user is logged in and is user the owner of this product --}}
            @if(Auth::user()->id != $product->user_id)
                <form id="bid-form" class="row g-3" method="POST" action="{{route('product.bid' , $product->id )}}" onsubmit="return confirm('Are you sure to submit this Bid?' );">
                @csrf
                    <div class="col-auto">
                        <label for="amount" class="visually-hidden"></label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rs</div>
                            </div>
                            <input  id="amount" name="amount" type="number" class="form-control" step="any"  placeholder="Enter Your Amount" oninput="validatebid()">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3 disabled" id="bidbtn"> BID NOW </button>
                    </div>
                </form>
                            
            @endif
            @endauth
            </div>
            <p id="warning_price" style="display:none;color:red;"></p>

                
                <div class="home-kv-carousel__countdown" id="timer" style="font-size: 20px;">
									<span class="home-kv-carousel__countdown-text-wrap">
									<span class="home-kv-carousel__countdown-num" id="day"></span>
									
										<span class="home-kv-carousel__countdown-text" data-text-singular="DAY" data-text-plural="DAYS">DAYS</span>
									
									
								</span>
								<span class="home-kv-carousel__countdown-colon">:</span>
								<span class="home-kv-carousel__countdown-text-wrap">
									<span class="home-kv-carousel__countdown-num" id="hour"></span>
									
										<span class="home-kv-carousel__countdown-text" data-text-singular="HOUR" data-text-plural="HOURS">HOURS</span>
									
									
								</span>
								<span class="home-kv-carousel__countdown-colon">:</span>
								<span class="home-kv-carousel__countdown-text-wrap">
									<span class="home-kv-carousel__countdown-num" id="min"></span>
									
										<span class="home-kv-carousel__countdown-text" data-text-singular="MINUTE" data-text-plural="MINUTES">MINUTES</span>
									
									
								</span>
								<span class="home-kv-carousel__countdown-colon">:</span>
								<span class="home-kv-carousel__countdown-text-wrap">
									<span class="home-kv-carousel__countdown-num" id="sec"></span>
									
										<span class="home-kv-carousel__countdown-text" data-text-singular="SECOND" data-text-plural="SECONDS">SECONDS</span>
									
									
								</span>
				</div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endisset


{{-- IF there is no product with this id --}}
@empty($product)
<div class="alert alert-danger text-center" role="alert">
        <strong>{{ _('Product Not Found')}}</strong> 
    </div>
@endempty



{{-- Getting Random Errors  --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



{{-- Success Bid alert **not yet finished**  --}}
@if ($message = \Session::get('success'))
  <!-- <div class="alert alert-success text-justify">
    {{ $message }}
  </div> -->
<div class="popupContainer" id="popupContainer">
      <div class="popup"> 
        <h1> Done ! </h1>
        <p> You have placed BID Successfully </P> 
        <button id="closebtn" onclick="closepopup()">OK</button>
      </div>
</div>
@endif


@endsection




{{--JS--}}
@isset($product)
<script>

            // Set the date we're counting down to
            var countDownDate = new Date(new Date("{{ $product->expired_at }}").getTime());
            // Update the count down every 1 second
            var x = setInterval(function() {
                // if (document.getElementById("hour") == null) {
                //     return; -10 -24 -14
                // }
                // var timer = document.getElementById('timer');
                var d;
                var h;
                var m;
                var s;

                var f = true;

                    // Get today's date and time
                var now = new Date().getTime();

                    // Find the distance between now and the count down date
                var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                var d = Math.floor(distance / (1000 * 60 * 60 * 24));
                var h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var s = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                // timer.innerHTML = d + "d   " + h + "m   " + m + "min   " + s + "s   ";
                document.getElementById('day').innerHTML = d;
                document.getElementById('hour').innerHTML = h; 
                document.getElementById('min').innerHTML = m;
                document.getElementById('sec').innerHTML = s;
                // If the count down is over, write some text
                if (distance < 1) {
                    $('#bid-form').hide();
                    document.getElementById('timer').style.color='red';
                    document.getElementById('timer').innerHTML = "Product Expired";
                    clearInterval(x);
                } 
                
            }, 1000);


            //Function for Closing Popup
            function closepopup(){
                var msg = document.getElementById('popupContainer');
                msg.classList.add("hide");
            }


            //Validate Bid price Before Submit
            function validatebid(){
                var input_val = parseInt(document.getElementById('amount').value);
                var warning = document.getElementById('warning_price');
                var max_bid = "{{ $bid_info[1]}}";
                var orig_price = "{{ $product->price }}";

                if(orig_price>max_bid){
                    max_bid = orig_price;
                }
                
                if(input_val<=max_bid){
                    warning.innerHTML = "Bid Price must be greater than current price";
                    warning.style.display = "inline-block";
                }else{
                    warning.style.display = "none";
                    document.getElementById('bidbtn').classList.remove('disabled');
                }
            }

</script>
@endisset

