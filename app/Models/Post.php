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
    }

    public static function find($slug): array {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        if(!$post){
            abort(404);
        }

        return $post;
    }
}