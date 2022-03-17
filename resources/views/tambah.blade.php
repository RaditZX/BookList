@extends('main')
@section('container')

<form action="{{ url('tambah') }}" method="POST" enctype="multipart/form-data">
@csrf

  <div class="mb-3">
    
    <label for="exampleInputEmail1" class="form-label">Judul</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="judul" aria-describedby="emailHelp"> 
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="author" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Penerbit</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="penerbit" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ringkasan</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="excerpt" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="image" class="form-label">Post Image</label>
  <input class="form-control" type="file" id="image" name="image">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Post image with link</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="image" aria-describedby="emailHelp">
  </div>
  <div class="form-floating">
  <label for="floatingTextarea2">isi</label>
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="body" style="height: 100px"></textarea>
  
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection