@extends('layouts.app')

@section('content')
<body>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">BID BOX</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac felis justo. Pellentesque laoreet turpis enim. Aliquam sed lectus pulvinar mi elementum tincidunt.</p>
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
                <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top img-responsive" style="object-fit:cover; height:200px; width:100%; Overflow:hidden;" src="{{ asset('storage/'.$all_products[$i]->image_path) }}"  />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$all_products[$i]->name}}</h5>
                                    <!-- Product price-->
                                    Rs{{number_format((float)$all_products[$i]->price, 2, '.', '')}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('product.view', $all_products[$i]->id )}}">View</a></div>
                            </div>
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

    </body>


@endsection


@extends('layouts.footer')