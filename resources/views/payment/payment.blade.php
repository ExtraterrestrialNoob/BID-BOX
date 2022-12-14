@extends('layouts.app')
@section ('content')

  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <form class="d-flex justify-content-center" action="{{ url('/payment_process') }}/{{$win_id}}" method="post" id="payment-form">
    {{ csrf_field() }} 
        <div class="col-lg-4 col-md-6 ">
            <div class="checkout__order">
                <h4>Your Order</h4>
                <img src="{{ asset('storage/'.$dis->image_path) }}" alt="">
                <div class="checkout__order__products">Product
                    <span>Price</span></div>
                <ul>
                    <li>{{$dis->name}} <span>Rs.{{ number_format((float)$dis->price, 2, '.', '')}}</span></li>
                   
                </ul>
                <div class="checkout__order__total">Your Bid <span>Rs{{$bid}}.00</span></div>
                <div class="checkout__order__total">
                    Card details</br></br>
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                            
                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>
                
                <button type="submit" class="site-btn">PLACE ORDER</button>
            </div>
        </div>
    </form>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://js.stripe.com/v3/"></script>


<script>
var publishable_key = '{{ env("STRIPE_KEY") }}';
</script>


<script>
    var stripe = Stripe(publishable_key);
  
  // Create an instance of Elements.
  var elements = stripe.elements();
    
  
  // Custom styling can be passed to options when creating an Element.
  // (Note that this demo uses a wider set of styles than the guide below.)
  var style = {
      base: {
          color: 'black',
          theme:'night',
          fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
          fontSmoothing: 'antialiased',
          fontSize: '16px',
          '::placeholder': {
              color: 'black'
          }
      },
      invalid: {
          color: '#fa755a',
          iconColor: '#fa755a'
      }
  };

 
    
  // Create an instance of the card Element.
  var card = elements.create('card', {
    style: style,
    hidePostalCode: true,
     
    });
    
  // Add an instance of the card Element into the `card-element` <div>.
  card.mount('#card-element');
    
  // Handle real-time validation errors from the card Element.
  card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
          displayError.textContent = event.error.message;
      } else {
          displayError.textContent = '';
      }
  });
    
  // Handle form submission.
  var form = document.getElementById('payment-form');
  form.addEventListener('submit', function(event) {
      event.preventDefault();
    
      stripe.createToken(card).then(function(result) {
          if (result.error) {
              // Inform the user if there was an error.
              var errorElement = document.getElementById('card-errors');
              errorElement.textContent = result.error.message;
          } else {
              // Send the token to your server.
              stripeTokenHandler(result.token);
          }
      });
  });
    
  // Submit the form with the token ID.
  function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);
    
      // Submit the form
      form.submit();
  }
</script>
@endsection