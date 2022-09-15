@extends('product.layout.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')


@isset($product)
<div class="container">
<div class="row flex-lg-nowrap">
  <!-- <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="#"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-crud-users" target="__blank"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-edit-profile-page" target="__blank"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
        </ul>
      </div>
    </div>
  </div> -->

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
                      <img src="{{ asset('assets/images/product/'.$product->image_path) }}" style="object-fit:cover;height:100%;width:100% ;Overflow:hidden;">
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
                    @method('PUT')
                      <input class="btn btn-primary" id="imageupload" type="file" name="image" value="image" class="form-control" data-buttonText="Upload Image" >
                      <button class="btn btn-primary" type="submit">Upload</button>
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
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Name</label>
                              <input class="form-control" type="text" name="name" placeholder="" value="{{ $product->name }}">
                            </div>
                          </div>
                          <!-- <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" type="text" name="username" placeholder="johnny.s" value="johnny.s">
                            </div>
                          </div> -->
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
                              <textarea class="form-control" rows="5" placeholder="" value="" style="resize: none;"> {{ $product->long_description }} </textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>Specification</label>
                              <textarea class="form-control" rows="2" placeholder="" value="" style="resize: none;"> {{ $product->specification }} </textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Expire Time</b></div>
                            <input id="expired_at" type="datetime-local" class="form-control @error('expired_at') is-invalid @enderror" name="expired_at" value="{{ old('expired_at') }}">
                      </div>
                      <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                        <div class="mb-2"><b>Category</b></div>
                        <select name="category" id="category" class="form-control">
                                @foreach($all_category as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                        </select>
                        <!-- <div class="mb-2"><b>Keeping in Touch</b></div>
                        <div class="row">
                          <div class="col">
                            <label>Email Notifications</label>
                            <div class="custom-controls-stacked px-2">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                                <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                                <label class="custom-control-label" for="notifications-news">Newsletter</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
                                <label class="custom-control-label" for="notifications-offers">Personal Offers</label>
                              </div>
                            </div>
                          </div>
                        </div> -->
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

      <!-- <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
          <div class="card-body">
            <div class="px-xl-3">
              <button class="btn btn-block btn-secondary">
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Support</h6>
            <p class="card-text">Get fast, free help from our friendly assistants.</p>
            <button type="button" class="btn btn-primary">Contact Us</button>
          </div>
        </div>
      </div>
    </div> -->

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
        <p> Success </P> 
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
        <h1> Done ! </h1>
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
        var expireddate = '{{ $product->expired_at}}';
        datetimelocal.value = expireddate;

        //change category type
        var defaultcategory = document.getElementById('category');
        var selected = '{{ $product->category_id}}';
        defaultcategory.value = selected;

    })

    function uploadimage(){
      console.log('Clicked');
      var image = documnet.getElementById('uploadbtn');
      var formData = new FormData();
      formData.append("file", imageupload.files[0]);
      $.ajax({
              type: 'GET',
              url:"{{route('product.refresh.bid' , $product->id )}}",
              success:function(data){
              $("#current_bid_price").html(data.max_bid);
              $("#total_bids").html(data.bid_count);
              })

    }
</script>
@endisset