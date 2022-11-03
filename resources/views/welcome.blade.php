@extends('layouts.app')
<header>
    <style>
        .welcome-banner{
            background-image:url(/storage/assets/images/frontend/banner.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .banner-text{
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-family: 'Advent Pro', sans-serif;
        }

        .search-center{
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 40%;
        }
        #search button, [type="text"]{
        position: absolute;
        height: 6vh;
        font-size: 5vh;
        border: none;
        bottom: 0;
        }
        #search button{
        width: 15%;
        right: 0;
        color: #FFFFFF;
        background: #D604B4;
        cursor: pointer;
        }
        #search [type='text']{
        background: #fff;
        bottom: 0;
        width: 85%;
        color: #777675;
        padding-left: 20px;
        padding-right: 20px;
        }


    </style>
</header>

@section('content')
<body>

<!-- <div class="welcome-banner"> 
    <div class="container-fluid">
        <h1 class="display-4 fw-bolder">BID BOX</h1>
        <p class="lead fw-normal text-white-50 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac felis justo. Pellentesque laoreet turpis enim. Aliquam sed lectus pulvinar mi elementum tincidunt.</p>
    </div>
</div> -->


        <!-- Header -->
        <header class="welcome-banner h-50">
            <div class="banner-text">
                <div class="text-center text-white ">
                    <h1 class="display-4 fw-bolder">BID BOX</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac felis justo.</p>
                </div>
            </div>
            

            <div id="search">
                <div class="search-center">
                    <form action="{{route('product.search')}}" method="GET">
                        <input type="text" id="search" name="query" class="form-control" placeholder="Search Product" />
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
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
            <div class="col-sm-6 col-xl-4">
                        <div class="bg--body">
                            <div class="auction__item-thumb">
                                <img class="border rounded"
                                    style="object-fit:cover; height:200px; width:100%; Overflow:hidden;"
                                    src="{{ asset('storage/'.$all_products[$i]->image_path) }}" alt="auction">
                            </div>

                            <div class="auction__item-content p-4">
                                <h5 class="card-title">{{$all_products[$i]->name}}</h5>
                                <p class="card-text">{{$all_products[$i]->short_description }}</p>
                                <a href="{{route('product.view', $all_products[$i]->id )}}" class="btn btn-primary">BID NOW</a>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item ">Price Start:
                                    {{number_format((float)$all_products[$i]->price, 2, '.', '')}}</li>
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

    </body>


@endsection


@extends('layouts.footer')