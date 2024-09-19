<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
            [   
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Jefri Jaya',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia fugit dicta numquam, asperiores voluptatum fuga ex earum, architecto, qui doloremque quia mollitia maiores exercitationem nostrum.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Acikiwirkurlala',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa facilis et eaque cumque. Quis ipsum at minus quibusdam debitis tenetur dolore soluta explicabo. Perspiciatis, qui.'
            ]
        ];
    }

    public static function find($slug): array 
    {
        // return Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug );

        if(!$post){
            abort(404);
        }

        return $post;
    }

}