@extends('product.layout.app')


@section('content')
<form method="POST" action="{{ route('product.product.create') }}" enctype="multipart/form-data">
@csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="any" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="expired_at" class="col-md-4 col-form-label text-md-end">{{ __('Expire_Time') }}</label>

                            <div class="col-md-6">
                                <input id="expired_at" type="datetime-local" class="form-control @error('expired_at') is-invalid @enderror" name="expired_at" value="{{ old('expired_at') }}" required autocomplete="expired_at">

                                @error('expired_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="short_description" class="col-md-4 col-form-label text-md-end">{{ __('short description') }}</label>

                            <div class="col-md-6">
                                <input id="short_description" type="text" class="form-control @error('short_description') is-invalid @enderror" name="short_description" value="{{ old('short_description') }}" required autocomplete="short_description">

                                @error('short_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="long_description" class="col-md-4 col-form-label text-md-end">{{ __('long description') }}</label>

                            <div class="col-md-6">
                                <textarea  id="long_description" class="form-control @error('long_description') is-invalid @enderror" name="long_description"></textarea>
                                @error('long_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="specification" class="col-md-4 col-form-label text-md-end">{{ __('specification') }}</label>

                            <div class="col-md-6">
                                <input id="specification" type="specification" class="form-control" name="specification">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('category') }}</label>

                            <div class="col-md-6">
                               <select name="category" id="category" class="form-control">
                                @foreach($all_category as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                               </select>
                            </div>
                        </div>

                        
                        
                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image ') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" name="image" class="form-control">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Product') }}
                                </button>
                            </div>
                        </div>

</form>

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