@extends('user.layout.app')
@section('content')
<div class="container rounded bg-white mt-5 mb-5">
<form method="POST" action="">
<div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <span class="font-weight-bold">
                <input type="file" value="avatar" class="form-control">
            </span>
            <span class="font-weight-bold">{{$user_data->name}}</span>
            <span class="text-black-50">{{$user_data->email}}</span>
            <span> </span>
        </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="{{$user_data->name}}"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="surename" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="number" class="form-control" placeholder="enter phone number" value="{{$user_data->tpno}}"></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value="address"></div>
                    <!-- <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="email" class="form-control" placeholder="enter email id" value="{{$user_data->email}}"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Password Reset</span><span class="border px-3 p-1 add-experience"><a class="fa fa-plus" href="{{ route('password.request') }}"></a>&nbsp;Password Reset</span></div><br>
            </div>
        </div>
    </div>
</div>
</div>
</form>
</div>
@endsection