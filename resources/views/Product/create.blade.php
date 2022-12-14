@extends('layouts.app')


@section('content')

<div class="container">
<div class="row flex-lg-nowrap">

  <div class="col">
  <fieldset class="border p-2" >
        <legend class="w-auto">Product Details</legend>
  <form method="POST" action="{{route('product.create')}}" enctype="multipart/form-data" id="addproduct">
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
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  
                <div class="row">
                    <div class="col">
                    <div class="form-group">
                    <div class="mb-2"><b>Upload image</b></div>
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
                            <div class="mb-2"><b>Name</b></div>
                              <input class="form-control" id="name" type="text" name="name" placeholder=""  required value="{{ old('name') }}">
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
                            <div class="mb-2"><b>Price</b></div>
                              <input id="price" type="number" step="any" class="form-control" name="price" value="{{ old('price') }}" required autocomplete="price">
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
                            <div class="mb-2"><b>Short Description</b></div>
                              <input class="form-control" type="text" name="short_description" placeholder="" value="{{ old('short_description') }}">
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
                            <div class="mb-2"><b>Long Description</b></div>
                              
                              <textarea  id="long_description" rows="5" class="form-control" name="long_description" value="{{ old('long_description') }}"></textarea>
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
                            <div class="mb-2"><b>Specification</b></div>
                              
                              <input id="specification" type="specification" class="form-control" name="specification" value="{{ old('specification')}}">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Expire Time</b></div>
                          
                            <input id="expired_at" type="date" class="form-control" name="expired_at" value="{{ old('expired_at') }}" required autocomplete="expired_at" min="" max="">

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
  </fieldset>
  </div>
</div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function closepopup(){
        var msg = document.getElementById('popupContainer');
        msg.classList.add("hide")
    }
    //change expire datetimelocal date

    $(document).ready(function setDateandCategory(){
    var datetimelocal = document.getElementById('expired_at');
    //max date to set
    datetimelocal.min = '{{ $nowdate }}';
    datetimelocal.max = '{{ $maxdate }}';

    })
    

    // Reference https://stackoverflow.com/questions/19447435/ajax-upload-image
    $(document).ready(function (e) {
    $('#addproduct').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
              Swal.fire("Success!",
                "Product Aded Successfully",
              "success")
            },
            error: function(data){
              Swal.fire("OOPS!",
                "Something went wrong !",
              "Error")
            }
        });
    }));
  })

</script>








