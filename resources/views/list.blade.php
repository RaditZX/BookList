
@extends('main')
@section('container')

<body>
  @foreach( $posts as $post )
  <article class="mb-5">
    <h1 style=" text-decoration: none;">
      <a href="/detail/{{ $post->id }}">{{ $post->judul }}</a>
    </h1>
    <img src="{{ asset('storage/'.$post->image) }}" style="width:300px;"alt="">
    <h5>{{ $post->Author }}</h5>
    <p style=" text-align: justify;">{{ $post->excerpt }}</p>

    <a href="/edit/{{ $post->id }}" class="btn btn-info btn-blue">
          <span class="glyphicon glyphicon-pencil"></span> Edit
        </a>

   <a href="/delete/{{ $post->id }}" class="btn btn-info btn-danger">
          <span class="glyphicon glyphicon-trash " ></span> Delete
        </a>
   
 

  </article>
  @endforeach
</body>
  

  @endsection