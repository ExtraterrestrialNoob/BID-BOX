@extends('product.layout.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')



{{-- if the product found and returned to blade from controller --}}
@isset($product)
<div class="container ">
    <div class="card">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6" style="height:350px;width:400px;">
                        <div class="preview-pic tab-content">
                            <img src="{{ asset('storage/assets/images/product/'.$product->image_path) }}" style="object-fit:cover;height:100%;width:100% ;Overflow:hidden;">
                        </div>
          </div>
          <div class="details col-md-6">

            <h3 class="product-title">{{$product->name}}</h3>
                <h4><span>Category</span> : {{$category->name}}</h4>

            <div class="rating">
              <h4 class="price">Price Start : <span> Rs. {{ number_format((float)$product->price, 2, '.', '')}}</span></h4>
            </div>

            <textarea class="form-control" rows="10" placeholder="" value="" style="resize: none;"> {{ $product->long_description }} </textarea>
            
                    <h4 class="price">Current Bid Price : <span id="current_bid_price">Rs. {{ $bid_info[1] }}</span></h4>
                    <span class="review-no">Total BIDs :<span id="total_bids">{{ $bid_info[0] }}</span> </span>
            
            
            <div class="card_area d-flex align-items-center">

            @auth {{-- Check if user is logged in and is user the owner of this product --}}
            @if(Auth::user()->id != $product->user_id)
                
                    <div class="col-auto">
                        <label for="amount" class="visually-hidden"></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rs</div>
                            </div>
                            <input  id="amount" name="amount" type="number" class="form-control" step="any"  placeholder="Enter Your Amount" oninput="validatebid()">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="" class="btn btn-primary mb-3 disabled" id="bidbtn" onclick="isconfirm()"> BID NOW </button>
                    </div>
                
                            
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

        <br>
          <div class="">
            <h5> LeaderBoard </h5>
            <table id="LeaderBoard">
                    <tr class="table-success">
                        <th>User</th>
                        <th>BID</th>
                        <th>Time</th>
                    </tr>

            </table>
          </div>



        </div>
      </div>
    </div>
  </div>

@endisset


{{-- IF there is no product with this id --}}
@empty($product)
@if($ActiveStatus == 0)
<div class="alert alert-danger text-center" role="alert">
        <strong>{{ _('Product Suspended')}}</strong> 
    </div>
@else
<div class="alert alert-danger text-center" role="alert">
        <strong>{{ _('Product Not Found')}}</strong> 
    </div>
@endif
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


@endsection


{{--JS--}}
@isset($product)
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    //Global Variables
    var max_bid = "{{ $bid_info[1] }}"
            

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



            //Validate Bid price Before Submit
            function validatebid(){
                var input_val = parseInt(document.getElementById('amount').value);
                var warning = document.getElementById('warning_price');
                var orig_price = "{{ $product->price }}";
                //var change_price = parseInt($data);
                //console.log(orig_price,'max bid', max_bid);

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
            
            //update table from ajax responses
            function updatetable(data){
                // https://stackoverflow.com/questions/3053503/javascript-to-get-rows-count-of-a-html-table
                var table = document.getElementById('LeaderBoard');
                var totalRowCount = table.rows.length;

                while (1<totalRowCount) {
                    table.deleteRow(1);
                    totalRowCount = table.rows.length;
                }

                for(let i in data){
                    var row = table.insertRow(-1);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    cell1.innerHTML = "*******";
                    cell2.innerHTML = "Rs. " + data[i]['amount'];
                    var date = new Date(data[i]['created_at']);
                    cell3.innerHTML = date.toLocaleString();
                }
            }


            // var counter=1;
            var refresh = setInterval(
                function() {
                    $.ajax({
                        type: 'GET',
                        url:"{{route('product.refresh.bid' , $product->id )}}",
                        success:function(data){
                            $("#current_bid_price").html("Rs" + data.max_bid);
                            $("#total_bids").html(data.bid_count);
                            
                            updatetable(data.bid_info);
                            max_bid = data.max_bid;
                        }
                    })
                }, 9000);

                //Change Table After Rendering webpage
                $(document).ready(function() {
                    $.ajax({
                        type: 'GET',
                        url:"{{route('product.refresh.bid' , $product->id )}}",
                        success:function(data){
                            updatetable(data.bid_info);
                            max_bid = data.max_bid;
                        }
                    })
                });


                function isconfirm(){

                    var amount = parseInt($("#amount").val());
                    console.log(amount);
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, place it!'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "POST",
                                url: "{{route('product.bid' , $product->id )}}",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    'amount':amount,
                                },
                                success:function(response){
                                    Swal.fire(
                                        'BID Placed!',
                                        'Your bid has been placed!.',
                                        'success'
                                      )
                                      document.getElementById('amount').value = "";
                                }
                            })
                        }
                        })
                }

</script>
@endisset

