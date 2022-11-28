

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-5 col-md-4 col-lg-3">
                <div class="shop_slidebar_area">
                <form class="ml-md-2">
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="radio" name="type" id="boring">
                <label for="boring" class="pl-1 pt-sm-0 pt-1">Boring</label>
            </div>
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="radio" name="type" id="ugly">
                <label for="ugly" class="pl-1 pt-sm-0 pt-1">Ugly</label>
            </div>
            <div class="form-inline border rounded p-md-2 p-sm-1">
                <input type="radio" name="type" id="notugly">
                <label for="notugly" class="pl-1 pt-sm-0 pt-1">Not Ugly</label>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
<div class="row" id="myDIV">
@foreach($all_products as $i)
    <div class="col-md-7 col-lg-4 mb-5 col-xl-3">
    <div class="card text-center card-product h-100">
        <img class="card-img-top img-responsive" style="object-fit:cover; height:200px; width:100%; Overflow:hidden;" src="{{ asset('storage/'.$i->image_path) }}"  alt="...">
        <div class="card-body p-4">
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

<nav class="container" style="margin-top: 15px;">
    <div class="d-flex justify-content-center">
        {!! $all_products->links() !!}
    </div>
</nav>

@endsection