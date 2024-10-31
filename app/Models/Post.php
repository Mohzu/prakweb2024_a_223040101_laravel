<?php

namespace App\Models;
use Illuminate\Support\Arr;


class Post {
    public static function all() 
    {
        return [
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
    }

    public static function find($slug): array 
    {


        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post) {
            abort(404);
        }

        return $post;
    }
}

