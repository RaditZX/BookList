@extends('main')
@section('container')

<body>
<article class="mb-5">
    <h1 style="text-align:center;" class="mb-5">
      {{ $post->judul }}
    </h1>
    <img src="{{ asset('storage/'.$post->image) }}"  style="width:300px; float:left; margin:0 9px 3px 0;"alt="">
    <div class="">
      
     <h5>Author:{{ $post->author }}</h5>
     <h5>Penerbit:{{ $post->penerbit }}</h5>
     <p style=" text-align: justify;">{{ $post->body }}</p>
     <a href="/list" class="btn btn-info btn-blue">
          <span class="glyphicon glyphicon-arrow-left"></span> Back
        </a>
    </div>

  </article>
</body>


  @endsection