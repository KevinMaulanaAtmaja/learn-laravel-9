<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Soeharto",
            "slug" => "judul-post-pertama",
            "author" => "Soeharto",
            "body" => " Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Dolores ullam assumenda deserunt, 
            amet, itaque vitae unde, nulla sed eius aut consectetur
            saepe distinctio! Cumque incidunt iusto, assumenda 
            minima possimus tenetur, eligendi quae ullam laboriosam
            dignissimos quidem odit dolor soluta quasi repellendus
            quis harum eum, beatae sequi ratione labore. 
            Odit, velit!",
        ],
        [
            "title" => "Judul Post Moertopo",
            "slug" => "judul-post-kedua",
            "author" => "Ali Moertopo",
            "body" => " Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Dolores ullam assumenda deserunt, 
            amet, itaque vitae unde, nulla sed eius aut consectetur
            saepe distinctio! Cumque incidunt iusto, assumenda 
            minima possimus tenetur, eligendi quae ullam laboriosam
            dignissimos quidem odit dolor soluta quasi repellendus
            quis harum eum, beatae sequi ratione labore. 
            Odit, velit! coba2",
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
