@extends('layouts.app')

@section('content')
    <!-- <body>
        <main class="body" id="main-content">
           <div class="d-flex justify-content-center">
           <div class="bg-dark w-75 p-3 "><p class="text-primary">
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
       </div>



<!-- Product cards  -->
<!-- <div
  class="bg-image card shadow-1-strong"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');"
>

  <div class="card-body text-white">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
    </p>
    <a href="#!" class="btn btn-outline-light">Button</a>
  </div>
</div>
<!-- Card -->


        <!-- </main>
    </body> --> 



    <body>
        <!-- Navigation-->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav> -->



        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                    $count=count($all_products);
                    if($count>8){
                        $count=8;
                    }
                ?>

            @for($i=0;$i<$count;$i++)
            <div class="col-md-7 col-lg-4 mb-3 col-xl-3">
            <div class="card text-center card-product">
            <img class="card-img-top img-responsive" src="{{ asset('assets/images/product/'.$all_products->image_path) }}"  alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$all_products->name}}</h5>
            <a href="{{route('product.view', $$all_products->id )}}" class="btn btn-primary">BID NOW</a>
        </div>
        <ul class="list-group list-group-flush">
                <li class="list-group-item">Price Start: {{number_format((float)$all_products[$i]->price, 2, '.', '')}}</li>
        </ul>
    </div>
    </div>
            @endfor
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; BID-BOX 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
       
    </body>


@endsection


@extends('layouts.footer')