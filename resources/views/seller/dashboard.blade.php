@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <?php
                    $name = Auth::user()->name;
                    ?>
                    {{ __('Hello :name, You are logged in!',['name'=>$name]) }}
                    <p>You will be redirected in <span id="timeout">3</span> seconds</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

setInterval(function() {
            var div = document.querySelector("#timeout");
            var count = div.textContent * 1 - 1;
            div.textContent = count;
            if (count <= 0) {
                window.location = "{{ url('/') }}";
            }
        }, 1000);
</script>

@endsection