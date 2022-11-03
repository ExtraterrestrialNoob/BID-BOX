@extends('layouts.app')
@section ('content')
<div class="container rounded bg-white mt-5 mb-5">
<table class="table align-middle mb-1 bg-light">
  <thead class="bg-light">
    <tr>
      <th >Product Name</th>
      <th >Product Price</th>
      <th >Your Bid</th>
      <th>Highest Bid</th>
      <th >Bid Time</th>
    </tr>
  </thead>
  @foreach(array_combine($histry, $high) as $i => $h)
  <tbody>
    <tr>
      <td class="table-secondary">
        <div class="d-flex align-items-center">
          <div class="ms-3">
            @if(($i->product) == null)
              <p class="fw-bold mb-1">This product is no longer available</p>
            @else
              <p class="fw-bold mb-1">{{$i->product->name}}</p>
            @endif
          </div>
        </div>
      </td>
      <td class="table-secondary">
        @if($i->product != null)
          <span class="fw-bold mb-1">Rs.{{number_format((float)$i->product->price, 2, '.', '')}}</span>
        @else
          <span class="fw-bold mb-1">Unknown</span>
        @endif
      </td>
      <td class="table-secondary">
        <span class="fw-bold mb-1">Rs.{{number_format((float)$i->amount, 2, '.', '')}}</span>
      </td>

      <td class="table-secondary">
        <span class="fw-bold mb-1">Rs.{{number_format((float)$h->amount, 2, '.', '')}}</span>
      </td>

    <td class="table-secondary">
        <p class="fw-normal mb-1">{{$i->created_at}}</p>
      </td>

      
   
  </tbody>
  @endforeach
</table>
</div>
@endsection