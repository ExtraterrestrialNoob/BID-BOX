@extends('product.layout.app')
@section('content')

<div class="container">
<div class="row">
@foreach($all_products as $i)
    <div class="col-md-7 col-lg-4 mb-3 col-xl-3">
    <div class="card text-center card-product">
        <img class="card-img-top img-responsive" src="{{ asset('assets/images/product/'.$i->image_path) }}"  alt="...">
        <div class="card-body">
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
</div>


@endsection