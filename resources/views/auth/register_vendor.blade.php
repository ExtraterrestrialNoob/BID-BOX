
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
    
<link rel="stylesheet" href="/css/stylefologin.css">
    <link rel="stylesheet" href="assets/admin/css/app.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    jQuery(document).ready(function($) {
    tab = $('.tabs h3 a');
  
    tab.on('click', function(event) {
      event.preventDefault();
      tab.removeClass('active');
      $(this).addClass('active');
  
      tab_content = $(this).attr('href');
      $('div[id$="tab-content"]').removeClass('active');
      $(tab_content).addClass('active');
    });
  });
</script>


</head>
<body>
<main class="main-body">

@include('preloader')


        <div class="overlay"></div>



<form method="post" action="{{ route('register') }}">
@csrf
<div class="form-wrap">
                <div class="tabs">
                  <h3 class="signup-tab"><a class="active" href="#signup-tab-content">As Bidder</a></h3>
                  <h3 class="login-tab"><a href="#login-tab-content">As Vendor</a></h3>
                </div><!--.tabs-->
            
                <div class="tabs-content">
                  <div id="signup-tab-content" class="active">
                    <form class="signup-form" action="" method="post">
                      <input type="email" class="input" id="email" autocomplete="on" placeholder="Email">
                      <input type="text" class="input" id="name" autocomplete="on" placeholder="Username">
                      
                      <input type="text" class="input" id="nic" autocomplete="on" placeholder="NIC NO.">
                      <input type="number" class="input" id="tpno" autocomplete="on" placeholder="TP NO.">
                      <input type="password" class="input" id="password" autocomplete="off" placeholder="Password">
                      <input type="submit" class="button" value="Sign Up">
                    </form><!--.login-form-->
                    <div class="help-text">
                      <p>By signing up, you agree to our</p>
                      <p><a href="#">Terms of service</a></p>
                    </div><!--.help-text-->
                  </div><!--.signup-tab-content-->
            
                  <div id="login-tab-content">
                  <form class="signup-form" action="" method="post">
                      <input type="email" class="input" id="email" autocomplete="off" placeholder="Email">
                      <input type="text" class="input" id="name" autocomplete="off" placeholder="Username">
                      
                      <input type="text" class="input" id="nic" autocomplete="off" placeholder="NIC NO.">
                      <input type="password" class="input" id="password" autocomplete="off" placeholder="Password">
                      <input type="submit" class="button" value="Sign Up">
                    </form><!--.login-form-->
                    <div class="help-text">
                      <p>By signing up, you agree to our</p>
                      <p><a href="#">Terms of service</a></p>
                    </div><!--.help-text-->
                  </div><!--.login-tab-content-->
                </div><!--.tabs-content-->
              </div><!--.form-wrap-->
</form>


</body>
</html>
