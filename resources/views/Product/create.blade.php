@extends('product.layout.app')


@section('content')

<div class="container">
<div class="row flex-lg-nowrap">


  <div class="col">
  <form method="POST" action="{{route('product.product.create')}}" enctype="multipart/form-data">
  @csrf  
  <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                
                     
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-left text-sm-left mb-2 mb-sm-0">
                    <div class="mt-2">
                   
                    
                     
                    
                    </div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Product Detail</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  
                <div class="row">
                    <div class="col">
                    <div class="form-group">
                    <lable>Upload image</lable>
                     <input id="image" type="file" name="image" class="form-control">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                    </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Name</label>
                              <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder=""  required>
                              @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Price</label>
                              <input id="price" type="number" step="any" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">
                              @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>Short Description</label>
                              <textarea id="short_description" type="text" class="form-control @error('short_description') is-invalid @enderror" name="short_description" value="{{ old('short_description') }}" required autocomplete="short_description"></textarea>
                              @error('short_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>Long Discription</label>
                              
                              <textarea  id="long_description" rows="5" class="form-control @error('long_description') is-invalid @enderror" name="long_description"></textarea>
                              @error('long_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col mb-3">
                            <div class="form-group">
                              <label>Specification</label>
                              
                              <input id="specification" type="specification" class="form-control" name="specification">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Expire Time</b></div>
                          
                            <input id="expired_at" type="datetime-local" class="form-control @error('expired_at') is-invalid @enderror" name="expired_at" value="{{ old('expired_at') }}" required autocomplete="expired_at">

                                @error('expired_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</form>
  </div>
</div>
</div>



@if ($message = \Session::get('success'))
<div class="popupContainer" id="popupContainer">
      <div class="popup"> 
        <h1> Done ! </h1>
        <p> Success </P> 
        <button id="closebtn" onclick="closepopup()">OK</button>
      </div>
</div>
@endif

<!-- @if ($message = \Session::get('error')) -->
  <!-- <div class="alert alert-success text-justify">
    {{ $message }}
  </div> -->
<!-- <div class="popupContainer" id="popupContainer">
      <div class="popup"> 
        <h1> Done ! </h1>
        <p> Error </P> 
        <button id="closebtn" onclick="closepopup()">OK</button>
      </div>
</div> -->
<!-- @endif -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = \Session::get('success'))
  <div class="alert alert-success text-justify">
    {{ $message }}
  </div>
@endif

@endsection







