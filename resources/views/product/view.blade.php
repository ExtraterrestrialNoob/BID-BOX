@extends('layouts.app')

@section('content')

@if(!is_null($product))
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Aroma Shop - Product Details</title>
<link rel="icon" href="img/xFevicon.png.pagespeed.ic.hZ51SwHHcH.webp" type="image/png">
<link rel="stylesheet" href="vendors/bootstrap,_bootstrap.min.css+fontawesome,_css,_all.min.css+themify-icons,_themify-icons.css+linericon,_style.css+nice-select,_nice-select.css+owl-carousel,_owl.theme.default.min.css+owl-carousel,_owl.carousel.min.css.pagespeed.cc.DLHg3rUIKd.css">
<link rel="stylesheet" href="css/A.style.css.pagespeed.cf.y_fCua6qS4.css">
<script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQXJvbWElMjBTaG9wJTIwLSUyMFByb2R1Y3QlMjBEZXRhaWxzJTIyJTJDJTIyeCUyMiUzQTAuOTExMjQzNTA3MzcxODIxMiUyQyUyMnclMjIlM0ExMzY2JTJDJTIyaCUyMiUzQTc2OCUyQyUyMmolMjIlM0E2MjclMkMlMjJlJTIyJTNBMTMyNiUyQyUyMmwlMjIlM0ElMjJodHRwcyUzQSUyRiUyRnByZXZpZXcuY29sb3JsaWIuY29tJTJGdGhlbWUlMkZhcm9tYSUyRnNpbmdsZS1wcm9kdWN0Lmh0bWwlMjIlMkMlMjJyJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZwcmV2aWV3LmNvbG9ybGliLmNvbSUyRnRoZW1lJTJGYXJvbWElMkYlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBLTMzMCUyQyUyMnElMjIlM0ElNUIlNUQlN0Q="></script><script nonce="5a60904c-0811-4adb-b5be-56a72269b4e5">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script><style type="text/css"></style><style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension:\/\/mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }
</style></head>

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
<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="vendors/bootstrap,_bootstrap.bundle.min.js+skrollr.min.js.pagespeed.jc.HXS4VrDNrm.js"></script><script>eval(mod_pagespeed_LECeJPGdhv);</script>
<script>eval(mod_pagespeed_qd2H_XgaU0);</script>
<script src="vendors,_owl-carousel,_owl.carousel.min.js+vendors,_nice-select,_jquery.nice-select.min.js+vendors,_jquery.ajaxchimp.min.js+vendors,_mail-script.js+js,_main.js.pagespeed.jc.EPblPCSFXD.js"></script><script>eval(mod_pagespeed_h8pmwIh97G);</script>
<script>eval(mod_pagespeed_dAam086T$O);</script>
<script>eval(mod_pagespeed_vbd4uots6k);</script>
<script>eval(mod_pagespeed_ZmOV$tyC8D);</script>
<script>eval(mod_pagespeed_7X6LgW4O1V);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"72ecc724b950b96c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>

@else
    <div class="alert alert-danger text-center" role="alert">
        <strong>{{ _('Product Not Found')}}</strong> 
    </div>
@endif
@endsection