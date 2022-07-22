
<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Product</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="{{url('images/icons/favicon.ico')}}" />

<link rel="stylesheet" type="text/css" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('fonts/iconic/css/material-design-iconic-font.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('vendor/animate/animate.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('vendor/css-hamburgers/hamburgers.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('vendor/animsition/css/animsition.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('vendor/select2/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('vendor/daterangepicker/daterangepicker.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('vendor/noui/nouislider.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('css/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">

<meta name="robots" content="noindex, follow">
<script nonce="6530c82e-b05d-49e2-817e-432f02c2cc41">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<div class="container-contact100">
<div class="wrap-contact100">
@if ($errors->any())
                  @foreach($errors->all() as $error)
                    <div>{{$error}}</div>
                  @endforeach
                @endif
<form class="contact100-form validate-form" action="{{ route('product.product') }}" method='post'class="tm-edit-product-form" enctype="multipart/form-data">
@csrf
<span class="contact100-form-title">
Submit Product
</span>
<div class="wrap-input100 validate-input bg1" data-validate="Please Type Product Name">
<span class="label-input100">NAME *</span>
<input class="input100" type="text" name="name" placeholder="Enter Product Name" id="name">
</div>

<div class="wrap-input100 validate-input bg1">
<span class="label-input100">Upload image</span>
<input class="input100" type="file" name="name" placeholder="Enter Product Name" id="image" required>
</div>

<div class="wrap-input100 validate-input bg1" data-validate="Please Type Product Name">
<span class="label-input100">Price *</span>
<input class="input100" type="number" name="price" placeholder="Enter Product Price" id="price">
</div>

<div class="wrap-input100 validate-input bg1">
<span class="label-input100">Short Description</span>
<input class="input100" rows="3" required id="short_description" value="{{ old('short_description') }}" type="text" required></textarea>
</div> 

<div class="wrap-input100 validate-input bg1">
<span class="label-input100">Long Description</span>
<textarea class="input100" rows="3" id="long_description"></textarea>
</div>

<div class="wrap-input100 bg1 rs1-wrap-input100">
<span class="label-input100">Expire Date</span>
<input class="input100" type="datetime-local" id='expired_at' name="ex" placeholder="Enter expire date">
</div>
<div class="wrap-input100 input100-select bg1">
<span class="label-input100">Category *</span>
<div>
<select class="js-select2" name="service" id="category">
@foreach($items as $item)
<option value="{{$item->id}}">{{$item->name}}</option>
@endforeach
</select>
<div class="dropDownSelect2"></div>
</div>
</div>


<div class="container-contact100-form-btn">
<button class="contact100-form-btn">
<span>
Submit
<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
</span>
</button>
</div>
</form>
</div>
</div>

<script src="{{url('vendor/jquery/jquery-3.2.1.min.js')}}"></script>

<script src="{{url('vendor/animsition/js/animsition.min.js')}}"></script>

<script src="{{url('vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{url('vendor/select2/select2.min.js')}}"></script>
<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>

<script src="{{url('vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{url('vendor/daterangepicker/daterangepicker.js')}}"></script>

<script src="{{url('vendor/countdowntime/countdowntime.js')}}"></script>

<script src="{{url('vendor/noui/nouislider.min.js')}}"></script>
<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>

<script src="{{url('js/main.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"72e5aef5ce2cb70d","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
