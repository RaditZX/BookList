@extends('main')
@section('container')

<form action="{{ url('update',$post->id) }}" method="POST" enctype="multipart/form-data">
@csrf


  <div class="mb-3">
    
    <label for="exampleInputEmail1" class="form-label">Judul</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="judul" aria-describedby="emailHelp" value="{{ $post->judul  }}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="author" aria-describedby="emailHelp" value="{{ $post->author  }} ">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penerbit</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="penerbit" aria-describedby="emailHelp" value="{{ $post->penerbit  }} ">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ringkasan</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="excerpt" aria-describedby="emailHelp" value="{{ $post->excerpt  }} ">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <label for="image" class="form-label">Post Image</label>
  <input class="form-control" type="file" id="image" name="image" >
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">isi</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="body" aria-describedby="emailHelp" value="{{ $post->body  }} ">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  
</div>
  <button type="submit" class="btn btn-primary" style="margin-left:20%">Submit</button>
</form>

@endsection