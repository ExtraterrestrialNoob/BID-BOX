@extends('product.layout.app')
@section('content')

<!-- Name |  | Price | BIDS | | Winner | Status | -->
<table class="table align-middle mb-1 bg-dark">
  <thead class="bg-light">
    <tr>
      <th >Name</th>
      <th >Product_ID</th>
      <th >Price</th>
      <th >BIDS</th>
      <th > MAX BID</th>
      <th >Winner</th>
      <th >Status</th>
      <th ></th>
    </tr>
  </thead>
  @foreach($all_products as $i)
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="{{ asset('assets/images/product/'.$i->image_path)}}"
              alt=""
              style="width: 80px; height: 80px"
              class="rounded"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1 text-light">{{$i->name}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1 text-light">{{$i->id}}</p>
      </td>
      <td>
        <span class="fw-bold mb-1 text-light">Rs.{{number_format((float)$i->price, 2, '.', '')}}</span>
      </td>
      <td class="fw-bold mb-1 text-light">{{$i->bid}}</td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
   
  </tbody>
  @endforeach
</table>


@endsection