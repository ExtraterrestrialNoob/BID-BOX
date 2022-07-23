@extends('user.layout.app')
@section('content')


@if(!is_null($user_data))
<div class="row py-5 px-4"> 
    <div class="col-md-5 mx-auto"> <!-- Profile widget --> 
    <div class="bg-white shadow rounded overflow-hidden"> 
        <div class="px-4 pt-0 pb-5 cover"> 
            <div class="media align-items-end profile-head"> 
                <div class="profile mr-3">
                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                    <a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div> 
                    <div class="media-body mb-5 text-white"> 
                        <h4 class="mt-0 mb-0">{{$user_data->name}}</h4> 
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>{{$user_data->email}}</p> 
                    </div>                         
                </div>                         
            </div>                         
            <!-- <div class="bg-light p-4 d-flex justify-content-end text-center"> 
                            <ul class="list-inline mb-0"> 
                                <li class="list-inline-item"> 
                                    <h5 class="font-weight-bold mb-0 d-block">215</h5>
                                    <small class="text-muted"> 
                                        <i class="fas fa-image mr-1"></i>Photos</small> 
                                </li> 
                                <li class="list-inline-item"> 
                                    <h5 class="font-weight-bold mb-0 d-block">745</h5>
                                    <small class="text-muted"> <i class="fas fa-user mr-1">
                                        </i>Followers</small>
                                </li> 
                                <li class="list-inline-item"> 
                                    <h5 class="font-weight-bold mb-0 d-block">340</h5>
                                    <small class="text-muted"> 
                                        <i class="fas fa-user mr-1"></i>Following
                                    </small> 
                                </li> 
                                </ul>                                                         
            </div>  -->
            <div class="px-4 py-3"> 
                    <h5 class="mb-0">About</h5> 
                        <div class="p-4 rounded shadow-sm bg-light"> 
                            <p class="font-italic mb-0">NIC : {{ $user_data->nic }}</p> 
                            <p class="font-italic mb-0">TELE : {{ $user_data->tpno }}</p> 
                            @if($user_data->role_id == 2)
                                <p class="font-italic mb-0">Bidder</p> 
                            @elseif($user_data->role_id == 3)
                                <p class="font-italic mb-0">Seller</p>
                            @else
                                <p class="font-italic mb-0">Admin</p>
                            @endif
                        </div> 
            </div> 
            @if($user_data->role_id == 3)
            <div class="py-4 px-4"> 
                    <div class="d-flex align-items-center justify-content-between mb-3"> 
                            <h5 class="mb-0">Recent Products </h5>
                            <a href="{{route('product.products', $user_data->id )}}" class="btn btn-link text-muted">Show all</a> 
                    </div> 
                    <div class="row"> 
                    @php
                    $c=count($all_products)
                    @endphp
                    @if($c>=4)
                    $c=4
                    @endif

                    @for($i=0;$i<$c;$i++)
                        <div class=" col-lg-6 mb-2 pr-lg-1">
                                <img src="{{ asset('assets/images/product/'.$all_products[$i]->image_path) }}" alt="" class="img-fluid rounded shadow-sm">
                        </div> 

                    @endfor                                
                    </div>                             
                </div>
            @endif                         
            </div>            
        </div>
    </div>
@else

{{_('User not found')}}

@endif
@endsection