@extends('layouts.app')
@section('content')


@if(!is_null($user_data))
<div class="row py-5 px-4"> 
    <div class="col-md-5 mx-auto"> <!-- Profile widget --> 
        <div class="bg-white shadow rounded overflow-hidden"> 
                <div class="px-4 pt-0 pb-5 cover"> 
                    <div class="media align-items-end profile-head"> 
                        <div class="profile mr-3">
                        @if($user_data->avatar != 'users/default.png')
                            <img src="{{asset('storage/'.$user_data->avatar)}}" alt="profile Avatar" width="130" class="rounded mb-2 img-thumbnail">
                        @else
                        <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="profile Avatar" width="130" class="rounded-circle mb-2 img-thumbnail">
                        @endif
                        @if(auth()->user()->id == $user_data->id)
                            <a href="{{ route('user.edit') }}" class="btn btn-outline-light btn-sm btn-block">Edit profile</a>
                        @endif
                        </div> 
                        
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

                                    <?php
                                    $c=count($all_products);
                                    if($c>=4){
                                        $c=4;
                                    }
                                    ?>

                                    @for($i=0;$i<$c;$i++)
                                    <div class=" col-lg-6 mb-2 pr-lg-1">
                                        <img style="max-width: 100%; " src="{{ asset('storage/'.$all_products[$i]->image_path) }}" alt="" class="img-fluid rounded shadow-sm">
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