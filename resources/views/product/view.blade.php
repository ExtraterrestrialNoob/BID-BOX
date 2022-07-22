@extends('layouts.app')

@section('content')

@if(!is_null($product))

    {{ $product->name }}

@else
    <div class="alert alert-danger text-center" role="alert">
        <strong>{{ _('Product Not Found')}}</strong> 
    </div>
@endif
@endsection