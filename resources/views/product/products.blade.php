@extends('layouts.app')


@section('content')
<table class="table table--light style--two">
    <th>
        <tr>
            <th>{{_('Name') }}</th>
            <th>{{_('Price') }}</th>
            <th>{{_('expired_at') }}</th>
            <th>{{_('short_description') }}</th>
@foreach($all_products as $product)

<tr>
    <td>{{ $product->name }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ $product->expired_at }}</td>
    <td>{{ $product->short_description }}</td>
<tr>
@endforeach

</table>
@endsection