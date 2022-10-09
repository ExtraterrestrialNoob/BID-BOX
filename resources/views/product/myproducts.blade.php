@extends('product.layout.app')
@section('content')

<!-- Name |  | Price | BIDS | | Winner | Status | -->
<div class="container rounded bg-white mt-5 mb-5">
<table class="table align-middle mb-1 bg-light">
  <thead class="bg-light">
    <tr>
      <th >Name</th>
      <th >Product ID</th>
      <th >Price</th>
      <th >Bids</th>
      <th >Max Bid</th>
      <th >Winner</th>
      <th >Status</th>
      <th ></th>
      <th ></th>
      <th ></th>
    </tr>
  </thead>
  @foreach($all_products as $i)
  <tbody>
    <tr>
      <td class="table-secondary">
        <div class="d-flex align-items-center">
          <img
              src="{{ asset('storage/'.$i->image_path)}}"
              alt=""
              style="width: 80px; height: 80px"
              class="rounded"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$i->name}}</p>
          </div>
        </div>
      </td>
      <td class="table-secondary">
        <p class="fw-normal mb-1">{{$i->id}}</p>
      </td>
      <td class="table-secondary">
        <span class="fw-bold mb-1">Rs.{{number_format((float)$i->price, 2, '.', '')}}</span>
      </td>
      <td class="fw-bold mb-1 table-secondary">{{$i->bid_count}}</td>

      <td class="table-secondary">
        <!-- <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button> -->
        <p class="fw-normal mb-1">Rs.{{number_format((float)$i->max_bid, 2, '.', '')}}</p>  
    </td>

    <td class="table-secondary">
        <p class="fw-normal mb-1">{{$i->winner}}</p>
      </td>

      <td class="table-secondary">
        @if($i->status == 'Active')
        <p class="fw-normal mb-1 text-success">{{$i->status}}</p>
        @else
        <p class="fw-normal mb-1 text-danger">{{$i->status}}</p>
        @endif
      </td>
      @if(auth()->user()->id == $i->user_id)
      <td class="table-secondary">
      <button type="submit" class="btn btn-primary" onclick='location="{{route('product.view', $i->id )}}"'>{{__('View')}}</button>  
      <!-- <p class="fw-normal mb-1"><a href="{{route('product.view', $i->id )}}">{{ __('View')}}</a></p> -->
      </td>

      <td class="table-secondary">
        <!-- <p class="fw-normal mb-1"><a href="{{route('product.edit', $i->id )}}">{{__('Edit')}}</a></p> -->
        <button type="submit" class="btn btn-warning" onclick='location="{{route('product.edit', $i->id )}}"'>{{__('Edit')}}</button>
      </td>

      <td class="table-secondary">
      <!-- <button type="submit" class="btn btn-danger" onclick='location="{{route('product.delete', $i->id )}}"'>{{__('Delete')}}</button> -->
      <button type="submit" class="btn btn-danger" onclick="deleteproduct({{$i->id}})">{{__('Delete')}}</button>
        <!-- <p class="fw-normal mb-1"><a href="{{route('product.delete', $i->id )}}">{{__('Delete')}}</a></p> -->
      </td>
      @else
      <td class="table-secondary">
      <button type="submit" class="btn btn-primary" disabled onclick='location="{{route('product.view', $i->id )}}"'>{{__('View')}}</button>  
      <!-- <p class="fw-normal mb-1"><a href="{{route('product.view', $i->id )}}">{{ __('View')}}</a></p> -->
      </td>

      <td class="table-secondary">
        <!-- <p class="fw-normal mb-1"><a href="{{route('product.edit', $i->id )}}">{{__('Edit')}}</a></p> -->
        <button type="submit" class="btn btn-warning"  disabled onclick='location="{{route('product.edit', $i->id )}}"'>{{__('Edit')}}</button>
      </td>

      <td class="table-secondary">
      <button type="submit" class="btn btn-danger" disabled onclick='location="{{route('product.delete', $i->id )}}"'>{{__('Delete')}}</button>
        <!-- <p class="fw-normal mb-1"><a href="{{route('product.delete', $i->id )}}">{{__('Delete')}}</a></p> -->
      </td>
      @endif
    </tr>
   
  </tbody>
  @endforeach
</table>
</div>

@endsection

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

  function deleteproduct(id){
    console.log(id);
    var baseurl = "/product/delete/" + id;
    console.log(baseurl);
    Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'Yes, Delete it!'
          }).then((result) => {
          if (result.isConfirmed) {
              $.ajax({
                  type: "DELETE",
                  url: baseurl,
                  data: {
                        "_token": "{{ csrf_token() }}"
                  },
                  success:function(response){
                          Swal.fire(
                                  'Deleted!',
                                  'Product Successfully Deleted',
                                  'success'
                                  )
                          
                      }
                })
            }
        })
  }

</script>