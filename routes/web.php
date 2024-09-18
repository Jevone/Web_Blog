<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['name' => 'Jefri Jaya', 'title' => 'About']);
});

Route::get('/posts', function(){
    return view('posts', ['title' => 'Blog', 'posts' => [
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
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
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

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact']);
});