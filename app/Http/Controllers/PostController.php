<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Post as ModelsPost;

class PostController extends Controller
{
    public function index(Request $request){
   
        if($request->has('search')){
            $posts =post::where('judul','LIKE','%' .$request->search. '%')->get();
        }
        else{
            $posts=post::all();
        }
        return view('list',[
        
            "title" => "list",
            "posts" => $posts
           
            
        ]);
    }
    
    public function show($slug){
        return view('detail',[
        
            "title" => "Single post",
            "post" => post::find($slug)
        
        
    ]);
    }
    public function create(){
        return view('tambah',[
            "title" => "tambah"
        ]);
    }
    public function store(Request $request){
  
      $post = new Post;
      $post->image=$request->image;
      $post->judul=$request->judul;
      $post->excerpt=$request->excerpt;
      $post->body=$request->body;
      $post->author=$request->author;
      $post->penerbit=$request->penerbit;
      $post->image=$request->image;
      if($request->file('image')){
          $post['image'] = $request->file('image')->store('post-image');

      }

      $post->save();
      return redirect('/list');
        
    }

    public function edit($id){
        return view('edit',[
            "title" => "edit",
            'post'=> post::findorfail($id)
        ]);
    }
    
    public function update(Request $request,$id){
        $post = post::findorfail($id);
        $post->update($request->all());

        $post->image=$request->image;
        if($request->file('image')){
            $post['image'] = $request->file('image')->store('post-image');
  
        } 
        $post->save();
        return redirect('/list');

      

    }

    public function delete($id){
        $post = post::findorfail($id);
        $post->delete();
        return redirect('/list');
    }
   
}


