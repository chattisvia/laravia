<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Halaman Utama']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Chattis'], ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blogku', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Chatam D. Fasha',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur dolores, tenetur, porro delectus ea
            dolorum cum harum sunt rerum iste possimus debitis eaque quia minus quas? Similique numquam corrupti
            voluptate!
            Eum dicta laborum cum reiciendis tempora architecto blanditiis molestias libero illo.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Chatam D. Fasha',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur dolores, tenetur, porro delectus ea
            dolorum cum harum sunt rerum iste possimus debitis eaque quia minus quas? Similique numquam corrupti
            voluptate!
            Eum dicta laborum cum reiciendis tempora architecto blanditiis molestias libero illo.'
        ],
        [
            'id' => 3,
            'slug' => 'judul-artikel-3',
            'title' => 'Judul Artikel 3',
            'author' => 'Chatam D. Fasha',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur dolores, tenetur, porro delectus ea
            dolorum cum harum sunt rerum iste possimus debitis eaque quia minus quas? Similique numquam corrupti
            voluptate!
            Eum dicta laborum cum reiciendis tempora architecto blanditiis molestias libero illo.'
        ],
        [
            'id' => 4,
            'slug' => 'judul-artikel-4',
            'title' => 'Judul Artikel 4',
            'author' => 'Chatam D. Fasha',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur dolores, tenetur, porro delectus ea
            dolorum cum harum sunt rerum iste possimus debitis eaque quia minus quas? Similique numquam corrupti
            voluptate!
            Eum dicta laborum cum reiciendis tempora architecto blanditiis molestias libero illo.'
        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [

        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Chatam D. Fasha',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur dolores, tenetur, porro delectus ea
            dolorum cum harum sunt rerum iste possimus debitis eaque quia minus quas? Similique numquam corrupti
            voluptate!
            Eum dicta laborum cum reiciendis tempora architecto blanditiis molestias libero illo.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Chatam D. Fasha',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur dolores, tenetur, porro delectus ea
            dolorum cum harum sunt rerum iste possimus debitis eaque quia minus quas? Similique numquam corrupti
            voluptate!
            Eum dicta laborum cum reiciendis tempora architecto blanditiis molestias libero illo.'
        ],
        [
            'id' => 3,
            'slug' => 'judul-artikel-3',
            'title' => 'Judul Artikel 3',
            'author' => 'Chatam D. Fasha',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur dolores, tenetur, porro delectus ea
            dolorum cum harum sunt rerum iste possimus debitis eaque quia minus quas? Similique numquam corrupti
            voluptate!
            Eum dicta laborum cum reiciendis tempora architecto blanditiis molestias libero illo.'
        ],
        [
            'id' => 4,
            'slug' => 'judul-artikel-4',
            'title' => 'Judul Artikel 4',
            'author' => 'Chatam D. Fasha',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur dolores, tenetur, porro delectus ea
                dolorum cum harum sunt rerum iste possimus debitis eaque quia minus quas? Similique numquam corrupti
                voluptate!
                Eum dicta laborum cum reiciendis tempora architecto blanditiis molestias libero illo.'
        ],

    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Kontakku']);
});
