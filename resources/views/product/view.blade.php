<head>
    <meta charset="UTF-8">
    <meta name="description" content="BID-BOX">
    <meta name="keywords" content="BID-BOX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BID-BOX</title>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/product/css/timer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

       
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{url('assets/images/logoIcon/logo.png')}}" alt=""></a>
        </div>

        <div class="humberger__menu__widget">
            <!-- <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div> -->
            <nav class="header__top__right__auth">
                                <!-- <a href="#"><i class="fa fa-user"></i> Login</a> -->
                                <ul >
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif
                        @else
                        <nav class="humberger__menu__nav mobile-menu">
                                <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="user" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> -->
                                <li class="fa-sharp fa-solid fa-circle-user "></li> {{ Auth::user()->name }} 
                                <!-- </a> -->

                                <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> -->
                                <!-- <span class="arrow_carrot-down"></span> -->
                                    <ul>
                                        <li  href="{{route('user.user')}}" ><a> <i class="fa-sharp fa-solid fa-circle-user "></i> Profile </a></li>

                                        <li  href="{{route('user.user.history', Auth::user()->id)}}" ><a><i class="fa-sharp fa-solid fa-gavel"></i> My Bids </a></li>

                                        <li  href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <a><i class="fa-solid fa-right-from-bracket"></i> {{ __('Logout') }}
                                        </a></li>

                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                                    <form id="profile-form" action="{{ route('user.user')}}" class="d-none">
                                        @csrf
                                    </form>
                                <!-- </div> -->
                    </nav>
                        @endguest
                    </ul>

            </nav>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('product.product')}}">Products</a></li>
                @guest
                @else
                    @if(Auth::user()->role_id==3) 
                    <li><a href="{{route('product.products', Auth::user()->id )}}">My Products</a></li>
                    <li><a href="{{route('product.product.create')}}">Add Products</a></li>
                    @endif
                    <li><a href="{{route('user.user.history', Auth::user()->id)}}">Bid History</a></li>
                    <!-- <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="./blog.html">Blog</a></li> -->
                <!-- <li><a href="./contact.html">Contact</a></li> -->
            @endguest
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->
    

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container" >
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> alfgayan@gmail.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <!-- <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div> -->
                            <div class="header__top__right__auth">
                                <!-- <a href="#"><i class="fa fa-user"></i> Login</a> -->
                                <ul style="display: flex;">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </div>
                            @endif

                            @if (Route::has('register'))
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif
                        @else
                            <div class="header__top__right__language">
                                <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="user" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> -->
                                <div class="fa-sharp fa-solid fa-circle-user "></div> {{ Auth::user()->name }} 
                                <!-- </a> -->

                                <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> -->
                                <!-- <span class="arrow_carrot-down"></span> -->
                                    <ul>
                                        <li  href="{{route('user.user')}}" ><a> <i class="fa-sharp fa-solid fa-circle-user "></i> Profile </a></li>

                                        <li  href="{{route('user.user.history', Auth::user()->id)}}" ><a> <i class="fa-sharp fa-solid fa-gavel"></i> My Bids </a></li>

                                        <li  href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <a><i class="fa-solid fa-right-from-bracket"></i> {{ __('Logout') }}
                                        </a></li>

                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                                    <form id="profile-form" action="{{ route('user.user')}}" class="d-none">
                                        @csrf
                                    </form>
                                <!-- </div> -->
                            </div>
                        @endguest
                    </ul>

                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{url('assets/images/logoIcon/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 pt-3 ">
                    <!-- <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav> -->

                    <nav class="header__menu ">
                <ul>
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('product.product')}}">Products</a></li>
                @guest
                @else
                    @if(Auth::user()->role_id==3) 
                    <li><a href="{{route('product.products', Auth::user()->id )}}">My Products</a></li>
                    <li><a href="{{route('product.product.create')}}">Add Products</a></li>
                    @endif
                    <li><a href="{{route('user.user.history', Auth::user()->id)}}">Bid History</a></li>
                    <!-- <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="./blog.html">Blog</a></li> -->
                <!-- <li><a href="./contact.html">Contact</a></li> -->
            @endguest
            </ul>
        </nav>
                </div>
               
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section >
        <div class="container">
            <div class="d-flex align-items-center justify-content-center" style="
    padding-top: 50px;
">
                
                <div class="col-lg-12">
                    <div class="hero__search d-flex align-items-center justify-content-center ">
                        <div class="hero__search__form">
                            <form action="{{route('product.search')}}" method="GET">
                            <input type="text" id="search" name="query" class="form-control" placeholder="Search Product" />
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Product Details Section Begin -->
    @isset($product)
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{ url('storage/'.$product->image_path) }}" alt="">
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$product->name}}</h3>
                        
                        <div class="price">Price Start :<span> Rs. {{ number_format((float)$product->price, 2, '.', '')}}</span></div>
                    </br>
                        <p>{{ $product->short_description }}</p>
                    </br>

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
                </br>
                    @if($bid_info[1] == null)
                        <div class="product__details__price">Current Bid Price: <span id="current_bid_price">Rs. 0.00</span></div>
                    @else
                    <div class="product__details__price">Current Bid Price: <span id="current_bid_price">Rs.{{ $bid_info[1] }}</span></div>
                    @endif
                         @auth {{-- Check if user is logged in and is user the owner of this product --}}
                        @if(Auth::user()->id != $product->user_id)
                         <div class="card_area d-flex align-items-center" id="bid-form">
                        <div class="col-auto">
                            <label for="amount" class="visually-hidden"></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rs</div>
                                </div>
                                <input id="amount" name="amount" type="number" class="form-control" step="any" placeholder="Enter Your Amount" oninput="validatebid()">
                            </div>
                        </div>
                        <div class="col-lg-0 pt-1">
                            <button type="" class="btn btn-primary mb-3 disabled" id="bidbtn" onclick="isconfirm()"> BID NOW </button>
                        </div>
                        @endif
                        @endauth
                        
                    </div>
                    <h6 id="warning_price" style="display:none;color:red;"></p></h6>
                    <h5>Total Bids:<span id="total_bids">{{ $bid_info[0] }}</span> </span></h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Bids</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h3>Products Infomation</h3>
                                    {{ $product->long_description }}
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- <h6>Bids</h6> -->
                                
                                        <h3> LeaderBoard </h3>
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
            </div>
        </div>
    </section>
    @endisset


<!-- Product Details Section End -->

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


<!-- Js Plugins -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
{{--JS--}}
@isset($product)
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script >
    //Global Variables
    
    function validate_layout() {


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
            // console.log(distance)
            if (distance <= 1) {

                document.getElementById('timer').style.color = 'red';
                document.getElementById('timer').innerHTML = "Product Expired";
                document.getElementById('bid-form').remove();
                clearInterval(x);
            }

        }, 1000);

    }

    //Validate Bid price Before Submit
    function validatebid() {
        var input_val = parseInt(document.getElementById('amount').value);
        var warning = document.getElementById('warning_price');
        var orig_price = "{{ $product->price }}";
        //var change_price = parseInt($data);
        //console.log(orig_price,'max bid', max_bid);

        if (orig_price > max_bid) {
            max_bid = orig_price;
        }

        if (input_val <= max_bid) {
            warning.innerHTML = "Bid Price must be greater than current price";
            warning.style.display = "inline-block";
        } else {
            warning.style.display = "none";
            document.getElementById('bidbtn').classList.remove('disabled');
        }
    }

    //update table from ajax responses
    function updatetable(data) {
        // https://stackoverflow.com/questions/3053503/javascript-to-get-rows-count-of-a-html-table
        var table = document.getElementById('LeaderBoard');
        var totalRowCount = table.rows.length;

        while (1 < totalRowCount) {
            table.deleteRow(1);
            totalRowCount = table.rows.length;
        }

        for (let i in data) {
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
                url: "{{route('product.refresh.bid' , $product->id )}}",
                success: function(data) {
                    if (data.max_bid == null) {
                        $("#current_bid_price").html("Rs 0.00");
                    } else {
                        $("#current_bid_price").html("Rs" + data.max_bid);
                    }

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
            url: "{{route('product.refresh.bid' , $product->id )}}",
            success: function(data) {
                updatetable(data.bid_info);
                max_bid = data.max_bid;
            }
        })
    });


    function isconfirm() {

        var amount = parseInt($("#amount").val());
        console.log(amount);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, place it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "{{route('product.bid' , $product->id )}}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'amount': amount,
                    },
                    success: function(response) {
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
