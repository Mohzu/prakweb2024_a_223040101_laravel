<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Moch Zuhdi'], ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
           'title' => 'Judul Artikel 1',
           'author' => 'Moch Zuhdi',
           'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab porro asperiores ut ex, in tenetur. Beatae quia omnis nihil esse voluptates libero, non iusto explicabo provident quidem atque fuga. Sit?' 
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Moch Zuhdi',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quisquam similique quo unde illo, mollitia odio architecto enim est quam earum labore ratione numquam quae, itaque repudiandae nam reprehenderit soluta?' 
         ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
           'title' => 'Judul Artikel 1',
           'author' => 'Moch Zuhdi',
           'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab porro asperiores ut ex, in tenetur. Beatae quia omnis nihil esse voluptates libero, non iusto explicabo provident quidem atque fuga. Sit?' 
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Moch Zuhdi',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quisquam similique quo unde illo, mollitia odio architecto enim est quam earum labore ratione numquam quae, itaque repudiandae nam reprehenderit soluta?' 
         ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    
    return view('post', ['title' => 'Single Post', 'post' => $post  ]);

});

Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});

