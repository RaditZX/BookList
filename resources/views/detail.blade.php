@extends('main')
@section('container')

<body>
<article class="mb-5">
    <h1 style="text-align:center;" class="mb-5">
      {{ $post->judul }}
    </h1>

    @if ($post->image)
    <img src="{{ asset('storage/'.$post->image) }}"  style=" width:400px;  display: block;margin-left: auto; margin-right: auto;"alt="">
    <img src="{{ $post->image }}"  style="width:400px;  display: block;margin-left: auto; margin-right: auto;"alt="">
    @else
     <img src="https://images.unsplash.com/photo-1576872381149-7847515ce5d8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=736&q=80"  style="width:300px; height:300px; float:left; margin:0 9px 3px 0;" alt="">
    @endif
     <h5 style="text-align: left;">Author:{{ $post->author }}</h5>
     <h5>Penerbit:{{ $post->penerbit }}</h5>
     <p style=" text-align: justify;">{{ $post->body }}</p>
     <a href="/list" class="btn btn-info btn-blue">
          <span class="glyphicon glyphicon-arrow-left"></span> Back
        </a>
   

  </article>
</body>


@endsection