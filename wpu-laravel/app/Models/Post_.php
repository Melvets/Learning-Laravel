<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Camela Devs",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed enim suscipit porro assumenda molestias blanditiis asperiores! Nemo ratione libero, quam enim voluptas vero officiis sed eius modi quas? Totam aliquid inventore porro asperiores, soluta voluptatibus sit officiis voluptatum dignissimos nulla, qui, corrupti voluptates quis quod minima laudantium. Vero debitis enim quae veniam aspernatur laudantium consectetur vitae nam doloremque, molestias quod maxime asperiores nihil rem sunt accusantium. Explicabo, assumenda! Odit dolore inventore, impedit reprehenderit a similique odio esse consequuntur placeat quibusdam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Camela Devs",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui totam nemo esse harum commodi repudiandae quae tempore fuga magni atque! Velit, vitae. Unde, magnam et voluptatum, officia facere veniam maxime corrupti consectetur neque suscipit repellat accusantium. Voluptatibus excepturi rerum eaque quam accusamus reiciendis cum aliquam mollitia. Ad repellat unde nobis eum maxime quas, temporibus ipsam, voluptas obcaecati impedit repellendus iste tempora in porro. Distinctio corporis doloribus voluptatum reiciendis modi laboriosam iusto velit? Aperiam soluta ullam deserunt illum assumenda perspiciatis minus nostrum magnam quia quae. Quia suscipit beatae eum odit adipisci a aperiam voluptatem impedit. Modi cupiditate repudiandae neque repellendus exercitationem."
        ]
    ];

    public static function all(){
        return collect (self::$blog_posts); //Jika bukan static ($this->blog_post)
    }

    public static function find ($slug){
        $posts = static::all();
        return $posts->firstWhere('slug' , $slug);    
    }
}
