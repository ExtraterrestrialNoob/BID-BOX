@extends('product.layout.sp')
@section('content')

<section class="product-section pt-120 pb-120">
    <div class="container">
        <div class="col-md-7 col-lg-4 mb-5 col-xl-3">
            <div class="filter-btn ms-auto">
                <i class="las la-filter"></i>
            </div>
        </div>
        <div class="row flex-wrap-reverse">
            <div class="col-lg-4 col-xl-3">
                <aside class="search-filter" style="background-color:white;">
                    <div class="bg--section pb-5 pb-lg-0">
                        <div class="filter-widget pt-3 pb-2">
                            <h4 class="title m-0"><i class="las la-random"></i>Filters</h4>
                            <span class="close-filter-bar d-lg-none">
                                <i class="las la-times"></i>
                            </span>
                        </div>

                        <div class="filter-widget">
                            <h6 class="sub-title">Sort by</h6>
                            <form>
                                <div class="form-check form--check">
                                    <input class="form-check-input sorting" value="created_at" type="radio" name="radio" id="radio1">
                                    <label for="radio1">Date</label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input sorting" value="price" type="radio" name="radio" id="radio2">
                                    <label for="radio2">Price</label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input sorting" value="name" type="radio" name="radio" id="raqdio3">
                                    <label for="raqdio3">Name</label>
                                </div>
                            </form>
                        </div>

                        <div class="filter-widget">
                            <h6 class="sub-title">By Price</h6>

                            <div class="widget">
                                <div id="slider-range" class="slidecontainer"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span></div>
                                <div class="price-range">
                                    <label for="amount">Price :</label>
                                    <input type="text" id="amount" readonly="">
                                    <input type="hidden" name="min_price">
                                    <input type="hidden" name="max_price">
                                </div>
                            </div>
                        </div>

                        <div class="filter-widget">
                            <h6 class="sub-title">By Category</h6>
                            <form>
                                @foreach($category as $cat)
                                <div class="form-check form--check">
                                    <input type="checkbox" class="form-check-input category-check" value="All" id="{{$cat->id}}">
                                    <label for="{{$cat->slug}}"><span></span>{{$cat->name}} <span>({{count($cat->products)}})</span></label>
                                </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </aside>
                <!-- ads -->
                <div class="mini-banner-area mt-4">
                    <div class="mini-banner">
                        <a href="https://script.viserlab.com/viserbid/adRedirect/eyJpdiI6ImlLdHMxVHBhY24yV1JnYTM0ejA1NVE9PSIsInZhbHVlIjoieWxXSG43KzFRNnIzRENkb28zQXp3Zz09IiwibWFjIjoiOGIwMDg5MGU4NjE3OTE5MDM1YTc0YzY3OGJiNmIyNGUxODhiODliNzE5YTRhZmZjZDE4NGIyYjJkZTM0NWRhZCIsInRhZyI6IiJ9" target="_blank"><img src="https://script.viserlab.com/viserbid/assets/images/advertisement/6219f157cf6d31645867351.gif"></a>                    </div>
                    <div class="mini-banner">
                        <a href="https://script.viserlab.com/viserbid/adRedirect/eyJpdiI6IklJNzRMRFl4TThLSXRYei82NWlTVXc9PSIsInZhbHVlIjoiQ1JFRGtRcHVzankxbHlWTG9uYnJsdz09IiwibWFjIjoiNzVjOTM1ZjgyMmZkNjY1MmFmNDc2MzYyMzExYTZjN2E1NDM3NmUzYmU4MWFlODllMjkzZjQ1NTAzOTY4YjgzNSIsInRhZyI6IiJ9" target="_blank"><img src="https://script.viserlab.com/viserbid/assets/images/advertisement/621a1e375ae3c1645878839.jpg"></a>                    </div>
                </div>
                <!-- end ads -->
            </div>
            <div class="col-lg-8 col-xl-9 search-result">
                <div id="overlay">
    <div class="cv-spinner">
        <span class="spinner"></span>
    </div>
</div>
<div class="overlay-2" id="overlay2"></div>
<div class="d-flex flex-wrap justify-content-sm-between justify-content-center mb-4" style="gap:15px 30px">
    <p class="mb-0 text-white">Showing Results: <span>18</span></p>
    <p class="mb-0 text-white">Results Found: <span>21</span></p>
</div>
<div class="row g-4">
@foreach($all_products as $i)
            <div class="col-sm-6 col-xl-4">
            <div class="bg--body">
                <div class="auction__item-thumb">
                        <img class="border rounded" style="object-fit:cover; height:200px; width:100%; Overflow:hidden;" src="{{ asset('storage/'.$i->image_path) }}" alt="auction">
                </div>

                <div class="auction__item-content p-4">
                <h5 class="card-title">{{$i->name}}</h5>
                <p class="card-text">{{$i->short_description }}</p>
                <a href="{{route('product.view', $i->id )}}" class="btn btn-primary">BID NOW</a> 
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Price Start: {{number_format((float)$i->price, 2, '.', '')}}</li>
                </ul>
            </div>
        </div>
@endforeach
</div>
<nav class="container" style="margin-top: 15px;">
    <div class="d-flex justify-content-center">
        {!! $all_products->links() !!}
    </div>
</nav>

            </div>
        </div>
    </div>
</section>
@endsection