
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title> {{setting('site.title')}}</title>
    <meta name="title" Content="BID BOX - Home">
    

    <meta name="description" content="A place where you can easily get what you dreamed of.">
    <meta name="keywords" content="bid,auction,bidding,bidding platform,auction bidding,product bidding">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="BID BOX - Home">
    
    <meta itemprop="name" content="BID BOX - Home">
    <meta itemprop="description" content="BID BOX is a multivendor auction bidding platform for your product.">
    <meta itemprop="image" content="assets/images/seo/62261df3490761646665203.jpg">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="BID BOX - Multivendor Auction Bidding Platform">
    <meta property="og:description" content="BID BOX is a multivendor auction bidding platform for your product.">
    <meta property="og:image" content="assets/images/seo/62261df3490761646665203.jpg"/>
    <meta property="og:image:type" content="png"/>
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="https://script.viserlab.com/viserbid">
    
    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" href="assets/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/templates/basic/css/animate.css">
    <link rel="stylesheet" href="assets/global/css/all.min.css">
    <link rel="stylesheet" href="assets/global/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/templates/basic/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/templates/basic/css/owl.min.css">
    <link rel="stylesheet" href="assets/templates/basic/css/headline.css">
    <link rel="stylesheet" href="assets/templates/basic/css/main.css">
    <link rel="stylesheet" href="assets/templates/basic/css/bootstrap-fileinput.css">
    <link rel="stylesheet" href="assets/templates/basic/css/custom.css">
    <link rel="stylesheet" href="assets/templates/basic/css/color.php?color=c151cc">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css"> -->
    
    
    

    
</head>

<body>


    <main class="main-body">



@include('preloader')
<!-- Header -->

<div class="header-bottom">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo me-lg-4">
                <a href="{{ url('') }}">
                    <img src="{{voyager::image(setting('site.logo'));}}" alt="logo" sizes="128x128">
                    
                </a>
            </div>
            <div class="menu-area">
                <div class="menu-close">
                    <i class="las la-times"></i>
                </div>
                <ul class="menu">
                    <li>
                        @if (Route::has('login'))
                        @auth
                        <a href="{{url('/home')}}">Home</a>
                        @else
                        <span>Home</span>
                        @endauth
                        @endif
                    </li>
                    <li>
                        <a href="products">About</a>
                    </li>
                    <li>
                        <a href="merchants">Contact</a>
                    </li>   
                </ul>
                <div class="change-language d-md-none mt-4 justify-content-center">
                    <div class="sign-in-up">
                        <span><i class="fas la-user"></i></span>
                        <a href="login">User Login</a>
                        <a href="login">Merchant Login</a>
                    </div>
                </div>
            </div>
            <div class="change-language ms-auto me-3 me-lg-0">
                @if (Route::has('login'))
                <div class="d-none and d-sm-block">
                    @auth
                       
                    @else
                        <div>
                        <span><i class="fas la-user"></i></span>
                            <a href="{{ route('login') }}">Login</a>
                        </div>  
                    @endauth
                </div>
            @endif
                </div>
           
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
<!-- Header -->
        
        
        
<section class="banner-section bg--overlay bg_img" data-background="assets/images/frontend/banner/61f8f23878ae61643704888.jpg">
	<div class="banner__inner">
		<div class="container">
			<div class="banner__content">
				<h2 class="banner__title cd-headline letters type">
					<span>{{setting('site.description')}}</span>
				</h2>
				<p class="banner__content-txt">Dolor sit amet consectetur adipisicing elit. Eligendi sit commodi ex, id recusandae rerum quae optio quaerat totam consequuntur ad illo ducimus magnam nulla.</p>
				<div class="btn__grp">
					<a href="/register_vendor" class="cmn--btn active">Become a Member</a>
				</div>
			</div>
		</div>
	</div>
</section>
    

    

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="assets/global/js/bootstrap.min.js"></script>
    <script src="assets/templates/basic/js/rafcounter.min.js"></script>
    <script src="assets/templates/basic/js/lightbox.min.js"></script>
    <script src="assets/templates/basic/js/owl.min.js"></script>
    <script src="assets/templates/basic/js/masonry.pkgd.min.js"></script>
    <script src="assets/templates/basic/js/countdown.min.js"></script>
    <script src="assets/templates/basic/js/headline.js"></script>
    <script src="assets/templates/basic/js/main.js"></script>
    
    
    




    <link rel="stylesheet" href="assets/global/css/iziToast.min.css">
<script src="assets/global/js/iziToast.min.js"></script>


</body>
</html>
