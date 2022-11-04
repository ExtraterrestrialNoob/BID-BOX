<html>

<head>
    <title>Responsive Checkout Form In
        Bootstrap 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background: #495057;
            font-family: "Nunito Sans";


        }

        label,
        li,
        h1,
        h3,
        h4,
        h5,
        h6,
        p {
            color: #fff;
        }

        .row {
            margin: 0;
        }

        .form-control::placeholder {

            color: #fff;



        }

        .form-control {
            height: 50px;
            border: none;
            border-bottom: 2px solid #313131;
            background: none;
            font-size: 18px;
            border-radius: 0px;
            margin-top: 10px;
            color: #fff;
        }

        .form-control:active {
            outline: none;
            border: none;
        }

        .form-control:focus {
            background: none;
            box-shadow: none;
            outline: none;
            border: none;

            border-bottom: 2px solid #495057;
            outline: 0;
        }

        .form-control:hover {
            border-bottom: 2px solid #495057;
            outline: none;
            border-color: none;
        }

        .container {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 8px;
        }

        button {
            background-color: #495057 !important;
            border-color: #495057 !important;
            height: 50px;
            line-height: 50px;
            margin-top: 10px;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        @media(max-width: 992px) {
            .mob-pl-0 {
                padding-left: 0px !important;
            }
        }

        @media(max-width:576px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <h3 class="text-center p-3">Responsive Checkout Form</h3>
    <div class="container mb-4">
        <div class="row pt-2 pb-4">
            <div class="col-lg-8">
                <!-- <form action="#"> -->
                    <div class="row pt-4">
                        
                        <div class="col-lg-6 mob-pl-0">



                            <div class="form-group">
                                <input type="text" name='amount' class="form-control" placeholder="Enter Name of card" required>
                            </div>
                            <form action="{{ url('/payment_process') }}/{{$win_id}}" method="post" id="payment-form">
                            {{ csrf_field() }}
                                <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                                </div>
                            
                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                            
                            <!-- <div class="form-group">

                                <input type="number" class="form-control" placeholder="Enter Card number" required>
                            </div> -->
                            <!-- <div class="row">
                                <div class="col-lg-6 pl-0">
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="01/95" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 pr-0 mob-pl-0">
                                    <div class="form-group">

                                        <input type="number" class="form-control" placeholder="Enter Cvv" irequired>
                                    </div>
                                </div>
                                <div class="col-md-12 p-0 text-center">
                                    <p class="mb-1 pb-2">Accepted Cards</p>
                                    <img src="payment.png" class="w-100">
                                </div>
                            </div> -->
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 pt-1">
                <div class="row pt-4">
                    <div class="col-8">
                        <h3 class="mb-0 pb-2">Cart</h3>
                    </div>
                    <div class="col-4">
                        <h3 class="mb-0 pb-2">4</h3>
                    </div>
                </div>
                <div class="row  pt-2">
                    <div class="col-8">

                        <h5 class="pb-2">Iphone</h5>
                        <h5 class="pb-2">Sony</h5>
                        <h5 class="pb-2">Dell</h5>

                    </div>
                    <div class="col-4">

                        <h5 class="pb-2">$1200</h5>
                        <h5 class="pb-2">$1000</h5>
                        <h5 class="pb-2">$1820</h5>
                    </div>
                </div>
                <div class="row border-top  border-dark">
                    <div class="col-8">
                        <h5 class="pt-2">Total</h5>
                    </div>
                    <div class="col-4">
                        <h5 class="pt-2">$4020</h5>
                    </div>
                </div>
                <div class="row pb-5 pt-4">
                    <div class="col-12">
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Shipping address same as
                                billing
                            </label>
                        </div>
                        <button class="btn btn-primary w-100">Complate Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

@if ($message = Session::get('success'))
    <div class="success">
        <strong>{{ $message }}</strong>
    </div>
@endif
 
 
@if ($message = Session::get('error'))
    <div class="error">
        <strong>{{ $message }}</strong>
    </div>
@endif

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
          color: 'white',
          fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
          fontSmoothing: 'antialiased',
          theame: 'night',
          fontSize: '16px',
          '::placeholder': {
              color: 'white'
          }
      },
      invalid: {
          color: '#fa755a',
          iconColor: '#fa755a'
      }
  };

 
    
  // Create an instance of the card Element.
  var card = elements.create('card', {style: style});
    
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

</html>

