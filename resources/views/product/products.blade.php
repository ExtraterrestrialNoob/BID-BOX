<head>
    <meta charset="UTF-8">
    <meta name="description" content="BID-BOX">
    <meta name="keywords" content="BID-BOX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                        <li><a href="{{route('user.user')}}"> <i class="fa-sharp fa-solid fa-circle-user "></i> Profile </a></li>

                                        <li><a href="{{route('user.user.history', Auth::user()->id)}}" ><i class="fa-sharp fa-solid fa-gavel"></i> My Bids </a></li>

                                        <li>
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket"></i> {{ __('Logout') }}
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
                                        <li><a href="{{route('user.user')}}"> <i class="fa-sharp fa-solid fa-circle-user "></i> Profile </a></li>

                                        <li><a href="{{route('user.user.history', Auth::user()->id)}}" ><i class="fa-sharp fa-solid fa-gavel"></i> My Bids </a></li>

                                        <li>
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket"></i> {{ __('Logout') }}
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
    padding-top: 50px;">
                
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

     <!-- Product Section Begin -->
     <section class="product spad">
        <div class="container">
        <form action="{{ route('product.filter') }}" method="POST">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                                @csrf
                                    @if (!empty($_GET['category']))
                                        @php
                                            $filter_cats = explode(',', $_GET['category']);
                                        @endphp
                                    @endif
                                    <ul>
                                        @foreach ($category as $cat)
                                        <li><input type="checkbox" @if (!empty($filter_cats) && in_array($cat->slug, $filter_cats)) 
                                            checked @endif class="form-check-input category-check" value="{{ $cat->slug }}" 
                                            id="{{ $cat->id }}" name="category[]" onchange="this.form.submit();">
                                            <label for="{{ $cat->slug }}"><span></span>{{ ucfirst($cat->name) }}
                                                    <span>({{ count($cat->products) }})</span></label> 
                                        </li>
                                        
                                        @endforeach
                                    </ul>
                            
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="{{ceil($min)}}" data-max="{{ceil($max)}}">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <a> RS</a>
                                        <input type="text" id="minamount" value="min" name="min">
                                        <a> RS</a>
                                        <input type="text" id="maxamount" value="max" name="max">
                                    </div>
                                    <button type="submit" class="btn btn-danger">filter</button>
                                </div>
                            </div>
                        </div>   
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Latest Products</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-1.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>$30.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-2.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>$30.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-3.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>$30.00</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-1.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>$30.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-2.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>$30.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-3.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>$30.00</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select id="sortBy" name="sortBy" onchange="this.form.submit();">
                                        <option value=" ">Default Sort</option>
                                        <option value="lth" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='lth') selected @endif>Price - Lower To Heigher</option>
                                        <option value="htl"@if(!empty($_GET['sortBy']) && $_GET['sortBy']=='htl') selected @endif>Price - Heigher To Lower</option>
                                        <option value="acs"@if(!empty($_GET['sortBy']) && $_GET['sortBy']=='acs') selected @endif>Alphabetical Ascending</option>
                                        <option value="desc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='desc') selected @endif>Alphabetical Descending</option>
                                        <option value="let" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='let') selected @endif>Leatest</option>
                                        <option value="old" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='odl') selected @endif>Oldest</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5 ">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 ">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>

                        </div>
                    
                    </div>
                    <div class="row">
                    @foreach($all_products as $i)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/'.$i->image_path) }}" style="background-image: url('{{ asset('/storage/'.$i->image_path)}}'); background-size: contain;">
                                  
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="{{route('product.view', $i->id )}}">{{$i->name}}</a></h6>
                                    <h5>Rs. {{ number_format((float)$i->price, 2, '.', '')}}</h5>
                                </div>
                            </div>
                    </div>
                    @endforeach
                    </div>
                    <div class="product__pagination">
                        {!! $all_products->appends($_GET)->links() !!}
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
    <!-- Product Section End -->

     <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>