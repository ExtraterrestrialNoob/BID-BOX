@extends('product.layout.app')

@section('content')


@isset($product)
<div class="container">
<div class="row flex-lg-nowrap">

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 250px; hight: 250px">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 250px; background-color: rgb(233, 236, 239);">
                      <!-- <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span> -->
                      <img src="{{ asset('storage/'.$product->image_path) }}" style="object-fit:cover;height:100%;width:100% ;Overflow:hidden;">
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-left text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ $product->name }}</h4>
                    <p class="mb-0"> By : {{ $user_info }}</p>
                    <div class="">Total Bids : {{ $bid_count}}</div>
                    <div class="mt-2">

                    <form method="POST" action="{{ route('product.update.image',$product->id) }}" enctype="multipart/form-data">
                    @csrf
                      <input class="btn btn-primary" id="imageupload" type="file" name="image" value="image" class="form-control" data-buttonText="Upload Image" >
                      <button class="btn btn-primary" type="submit" >Upload</button>
                    </form>

                    </div>
                  </div>
                  <div class="text-left text-sm-right">
                    <div class=""> ID : {{ $product->id }} </div>
                    <div class=""><span id="createdDate"></span></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form method="POST" class="form" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Name</label>
                              <input class="form-control" type="text" name="name" placeholder="" value="{{ $product->name }}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Price</label>
                              <input class="form-control" type="text" placeholder="" value="Rs.{{ number_format((float)$product->price, 2, '.', '')}}" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>Short Description</label>
                              <input class="form-control" type="text" name="short_description" placeholder="" value="{{ $product->short_description }}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>Long Discription</label>
                              <textarea class="form-control" rows="5" type="text" name ="long_description" value="" style="resize: none;"> {{ $product->long_description }} </textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>Specification</label>
                              <textarea class="form-control" rows="2" type="text" name="specification" placeholder="" value="" style="resize: none;"> {{ $product->specification }} </textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Expire Time</b></div>
                            <input id="expired_at" type="date" class="form-control" name="expired_at" value="{{ old('expired_at') }}" min="" max="">
                      </div>
                      <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                        <div class="mb-2"><b>Category</b></div>
                        <select name="category" id="category" class="form-control">
                                @foreach($all_category as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
@endisset

{{-- IF there is no product with this id --}}
@empty($product)
<div class="alert alert-danger text-center" role="alert">
        <strong>{{ _('Product Not Found')}}</strong> 
    </div>
@endempty


@if ($message = \Session::get('success'))
  <!-- <div class="alert alert-success text-justify">
    {{ $message }}
  </div> -->
  <div class="popupContainer" id="popupContainer">
      <div class="popup"> 
        <h1> Done ! </h1>
        <p> You have placed BID Successfully </P> 
        <button id="closebtn" onclick="closepopup()">OK</button>
      </div>
</div>
@endif

@if ($message = \Session::get('error'))
  <!-- <div class="alert alert-success text-justify">
    {{ $message }}
  </div> -->
<div class="popupContainer" id="popupContainer">
      <div class="popup"> 
        <h1> Error ! </h1>
        <p> Error </P> 
        <button id="closebtn" onclick="closepopup()">OK</button>
      </div>
</div>
@endif



@endsection
@isset($product)
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function setDateandCategory(){
        //change created date
        var date = document.getElementById('createdDate');
        var createddate = new Date('{{ $product->created_at}}');
        date.innerHTML = 'Created : ' + createddate.toLocaleString();

        //change expire datetimelocal date
        var datetimelocal = document.getElementById('expired_at');
        //max date to set
        datetimelocal.value = '{{ $product->expired_at}}';
        datetimelocal.min = '{{ $nowdate }}';
        datetimelocal.max = '{{ $maxdate }}';
        console.log(datetimelocal.min);
        console.log(datetimelocal.max);

        //change category type
        var defaultcategory = document.getElementById('category');
        var selected = '{{ $product->category_id}}';
        defaultcategory.value = selected;

    })

    function closepopup(){
                var msg = document.getElementById('popupContainer');
                msg.classList.add("hide");
            }

</script>
@endisset