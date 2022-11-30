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
                    <div class="hero__item " data-setbg="{{url('storage/assets/images/frontend/banner.jpg')}}" style="background-image: url('storage/assets/images/frontend/banner.jpg');background-size: contain;">
                        <div class="hero__text">
                            <span>BID BOX</span>
                            <h2>Vegetable <br />100% Organic</h2>
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
            <div class="row featured__filter">
            @foreach($all_products as $i)    
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('storage/'.$i->image_path) }}" style="background-image: url('{{ asset('/storage/'.$i->image_path)}}'); background-size: contain;">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{route('product.view', $i->id )}}">{{$i->name}}</a></h6>
                            <h5>Rs. {{ number_format((float)$i->price, 2, '.', '')}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach   
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

     <!-- Footer Section Begin -->
     <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </footer>

     <!-- Js Plugins -->
     <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
