@extends('layouts.app')

@section('content')
    <body>
        <main class="body" id="main-content">
           <div class="d-flex justify-content-center">
           <div class="bg-dark w-75 p-3 "><p class="text-primary">
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
       </div>



<!-- Product cards  -->
<div
  class="bg-image card shadow-1-strong"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');"
>

  <div class="card-body text-white">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">
      Some quick example text to build on the card title and make up the bulk of the
      card's content.
    </p>
    <a href="#!" class="btn btn-outline-light">Button</a>
  </div>
</div>
<!-- Card -->


        </main>
    </body>
@endsection


@extends('layouts.footer')