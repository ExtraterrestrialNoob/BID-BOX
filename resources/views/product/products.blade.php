@extends('layouts.app')
@section ('content')
    <!-- Hero Section Begin -->
    <section >
        <div class="container">
            <div class="d-flex align-items-center justify-content-center" style="
    padding-top: 50px;">
                
                <div class="col-lg-12">
                    <div class="hero__search d-flex align-items-center justify-content-center ">
                        <div class="hero__search__form">
                            <form action="{{route('product.search')}}" method="GET">
                            <input type="text" id="search" name="query" class="form-control" placeholder="Search Product" />
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

     <!-- Product Section Begin -->
     <section class="product spad">
        <div class="container">
        <form action="{{ route('product.filter') }}" method="POST">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                                @csrf
                                    @if (!empty($_GET['category']))
                                        @php
                                            $filter_cats = explode(',', $_GET['category']);
                                        @endphp
                                    @endif
                                    <ul>
                                        @foreach ($category as $cat)
                                        <li><input type="checkbox" @if (!empty($filter_cats) && in_array($cat->slug, $filter_cats)) 
                                            checked @endif class="form-check-input category-check" value="{{ $cat->slug }}" 
                                            id="{{ $cat->id }}" name="category[]" onchange="this.form.submit();">
                                            <label for="{{ $cat->slug }}"><span></span>{{ ucfirst($cat->name) }}
                                                    <span>({{ count($cat->products) }})</span></label> 
                                        </li>
                                        
                                        @endforeach
                                    </ul>
                            
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                 data-min="{{ceil($min)}}" data-max="{{ceil($max)}}">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <a> RS</a>
                                        <input type="text" id="minamount" value="min" name="min">
                                        <a> RS</a>
                                        <input type="text" id="maxamount" value="max"  name="max">
                                    </div>
                                    <button type="submit" class="btn btn-danger">filter</button>
                                </div>
                            </div>
                        </div>   
                       
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select id="sortBy" name="sortBy" onchange="this.form.submit();">
                                        <option value=" ">Default Sort</option>
                                        <option value="lth" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='lth') selected @endif>Price - Lower To Heigher</option>
                                        <option value="htl"@if(!empty($_GET['sortBy']) && $_GET['sortBy']=='htl') selected @endif>Price - Heigher To Lower</option>
                                        <option value="acs"@if(!empty($_GET['sortBy']) && $_GET['sortBy']=='acs') selected @endif>Alphabetical Ascending</option>
                                        <option value="desc" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='desc') selected @endif>Alphabetical Descending</option>
                                        <option value="let" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='let') selected @endif>Leatest</option>
                                        <option value="old" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='odl') selected @endif>Oldest</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5 ml-auto p-2 ">
                                <div class="filter__found">
                                    <h6><span>{{count($all_products)}}</span> Products found</h6>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    {{-- <div class="row"> --}}

                    <div id='all_conatainer' class="main_container">
                        <div class="container">    
                        @foreach($all_products as $i)
                        {{-- <div class="col-lg-4 col-md-6 col-sm-6 ">
                                <div class="product__item mb-5">
                                    <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/'.$i->image_path) }}" style="background-image: url('{{ asset('/storage/'.$i->image_path)}}'); background-size: contain;">
                                    
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product.view', $i->id )}}">{{$i->name}}</a></h6>
                                        <h5>Rs. {{ number_format((float)$i->price, 2, '.', '')}}</h5>
                                    </div>
                                </div>
                        </div> --}}

                        <div class="card_item">
                            <div class="card_img">
                                <img class="c-node_img_content" src="{{ asset('storage/'.$i->image_path) }}" alt="img_1">
                            </div>
                            <div class="card_details">
                                <div class="card_details_title">
                                    <h3 class="card_details_tittle">
                                    <a href="{{route('product.view', $i->id )}}" > {{$i->name}} </a>
                                    </h3>
                                </div>
                                <div class="card_details_container">
                                    <div class="card_bidding_details">
                                        <div class="card_timer">
                                            <span class="js_timer_title">
                                                Time Remaining
                                            </span> <br>
                                            <div class="timer_body">
                                                <div class="days">
                                                    <div class="value_box">
                                                        <p id="value_days_{{ $i->id }}">001</p>
                                                    </div> 
                                                    <div class="title" id="title_days">
                                                        Days
                                                    </div>
                                                </div>
        
                                                <div class="hours">
                                                    <div class="value_box">
                                                        <p  id="value_hours_{{ $i->id }}">001</p>
                                                    </div>
                                                    <div class="title" id="title_hours">
                                                        Hrs
                                                    </div>
        
                                                </div>
        
                                                <div class="mins">
                                                    <div class="value_box">
                                                        <p id="value_mins_{{ $i->id }}">001</p>
                                                    </div>
                                                    <div class="title" id="title_mins">
                                                        Min
                                                    </div>
                                                </div>
        
                                                <div class="secs">
                                                    <div class="value_box">
                                                        <p id="value_secs_{{ $i->id }}">001</p>
                                                    </div>
                                                    <div class="title" id="title_secs">
                                                        Sec
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card_price">
                                            <span class="card_price_title">
                                                Current Bid
                                            </span> <br>
                                            <div class="card_price_value">
                                                <p>LKR {{ number_format((float)$i->price, 0, '.', '')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card_button">
                                    <a onclick="window.location.href='{{route('product.view', $i->id )}}';">BID NOW</a>
                                </div>
                            </div>
                        </div>



                        @endforeach

                    </div>
                </div>
                        {{-- </div> --}}
                    <div class="product__pagination">
                        {!! $all_products->appends($_GET)->links() !!}
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
    <!-- Product Section End -->

@endsection