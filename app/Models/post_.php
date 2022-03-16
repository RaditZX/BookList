<?php

namespace App\Models;


class post 
{
   private static $blog_post=[
        [
            "Judul" => "How to be great duelist",
            "slug" => "How to be great duelist",
            "Author" => "Daiva Raditya",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus at, adipisci in atque accusantium totam maxime quisquam repellendus voluptatibus recusandae deleniti natus accusamus quis cumque ad possimus nam aut ducimus."



        ],
        [
            "Judul" => "How to be great controller",
            "slug" => "How to be great controller",
            "Author" => "Raaqi athaula",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus at, adipisci in atque accusantium totam maxime quisquam repellendus voluptatibus recusandae deleniti natus accusamus quis cumque ad possimus nam aut ducimus."
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_post); 
    }
    
    public static function find($slug)
    {
        $posts =static::all();
       

    
    return $posts->firstWhere('slug',$slug);
   }
}