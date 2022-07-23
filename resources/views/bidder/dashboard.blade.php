
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                </div>
            </div>
        </div>
    </div>
</div>



<!--
    change page title

-->
<?php 
$name = Auth::user()->name;
$name = $name . "'s Profile"
?>

<script type="text/javascript">
    document.title = "<?=$name;?>"
</script>


@endsection