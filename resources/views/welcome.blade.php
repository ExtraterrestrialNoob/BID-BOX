@extends('layouts.app')
@section ('content')
    <!-- Hero Section Begin -->
    <section >
        <div class="container">
            <div class="d-flex align-items-center justify-content-center" style="padding-top: 50px;">
                
                <div class="col-lg-12">
                    <div class="hero__search d-flex align-items-center justify-content-center ">
                        <div class="hero__search__form">
                            <form action="{{route('product.search')}}" method="GET">
                            <input type="text" id="search" name="query" class="form-control" placeholder="Search Product" />
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        
                    </div>
                    <div class="hero__item " data-setbg="{{url('storage/assets/images/frontend/banner.jpg')}}" style="background-image: url('storage/assets/images/frontend/banner.jpg');background-size: contain;">
                        <div class="hero__text">
                            <span>BID BOX</span>
                            <h2>Auction with affordability</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->



    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                </div>
            </div>
        </div>
         
        <div id='all_conatainer' class="main_container">
            <div class="container">
                @foreach($all_products as $i)   
                <div class="card_item">
                    <div class="card_img">
                        <img class="c-node_img_content" src="{{ asset('storage/'.$i->image_path) }}" alt="img_1">
                    </div>
                    <div class="card_details">
                        <div class="card_details_title">
                            <h3 class="card_details_tittle">
                            <a href="{{route('product.view', $i->id )}}" > {{$i->name}} </a>
                            </h3>
                        </div>
                        <div class="card_details_container">
                            <div class="card_bidding_details">
                                <div class="card_timer">
                                    <span class="js_timer_title">
                                        Time Remaining
                                    </span> <br>
                                    <div class="timer_body">
                                        <div class="days">
                                            <div class="value_box">
                                                <p id="value_days_{{ $i->id }}">001</p>
                                            </div> 
                                            <div class="title" id="title_days">
                                                Days
                                            </div>
                                        </div>

                                        <div class="hours">
                                            <div class="value_box">
                                                <p  id="value_hours_{{ $i->id }}">001</p>
                                            </div>
                                            <div class="title" id="title_hours">
                                                Hrs
                                            </div>

                                        </div>

                                        <div class="mins">
                                            <div class="value_box">
                                                <p id="value_mins_{{ $i->id }}">001</p>
                                            </div>
                                            <div class="title" id="title_mins">
                                                Min
                                            </div>
                                        </div>

                                        <div class="secs">
                                            <div class="value_box">
                                                <p id="value_secs_{{ $i->id }}">001</p>
                                            </div>
                                            <div class="title" id="title_secs">
                                                Sec
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_price">
                                    <span class="card_price_title">
                                        Current Bid
                                    </span> <br>
                                    <div class="card_price_value">
                                        <p>LKR {{ number_format((float)$i->price, 2, '.', '')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_button">
                            <a onclick="window.location.href='{{route('product.view', $i->id )}}';">BID NOW</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>










    </section>
    <!-- Featured Section End -->

@endsection

{{-- Change Timer --}}
<script>
    var all_products = {!! json_encode($all_products->toArray(), JSON_HEX_TAG) !!} // convert php varibale to js    
    console.log(all_products);
    all_products.forEach(timer);

    function timer($product){
        var countDownDate = new Date(new Date($product.expired_at).getTime());
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
            document.getElementById('value_days_' + $product.id.toString()).innerHTML = d;
            document.getElementById('value_hours_' + $product.id.toString()).innerHTML = h;
            document.getElementById('value_mins_' + $product.id.toString()).innerHTML = m;
            document.getElementById('value_secs_' + $product.id.toString()).innerHTML = s;
        }, 1000);
        }
        
</script>