<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [    
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Author 1",
            "body" => "1Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam maiores, impedit temporibus officia veniam! Perferendis deserunt fugiat sit provident veritatis beatae aut veniam eum? Laboriosam illo maxime labore officia ipsa quaerat maiores impedit ea. Voluptas nostrum molestias beatae necessitatibus ipsa, voluptatum expedita corporis veniam recusandae error laboriosam aliquid suscipit dolorem vero architecto, provident vitae iure assumenda esse. Sequi ex quia, facere minima repudiandae repellat provident earum aut sint, recusandae, maxime unde inventore ut nobis placeat? Atque, magni asperiores ipsa blanditiis unde ipsum recusandae est doloribus id nisi, dicta velit reprehenderit minus harum magnam facilis facere illum at ea! Ipsum."
        ],
        [    
            "title" => "Judul Post 2",
            "slug" => "judul-post-2",
            "author" => "Author 2",
            "body" => "2Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam maiores, impedit temporibus officia veniam! Perferendis deserunt fugiat sit provident veritatis beatae aut veniam eum? Laboriosam illo maxime labore officia ipsa quaerat maiores impedit ea. Voluptas nostrum molestias beatae necessitatibus ipsa, voluptatum expedita corporis veniam recusandae error laboriosam aliquid suscipit dolorem vero architecto, provident vitae iure assumenda esse. Sequi ex quia, facere minima repudiandae repellat provident earum aut sint, recusandae, maxime unde inventore ut nobis placeat? Atque, magni asperiores ipsa blanditiis unde ipsum recusandae est doloribus id nisi, dicta velit reprehenderit minus harum magnam facilis facere illum at ea! Ipsum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $dataPosts = static::all();
        // $post = [];
        // foreach($dataPosts as $data) {
        //     if( $data["slug"] === $slug ) {
        //         $post = $data;
        //     }
        // }

        // Menggantikan baris diatas menggunakan collection
        return $dataPosts->firstWhere('slug', $slug);
    }
}
