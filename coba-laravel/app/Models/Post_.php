<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus corporis, architecto natus facere reiciendis repudiandae, veniam tempora laudantium autem, omnis vitae ipsa non expedita cumque odit illo! Labore, ducimus! Mollitia soluta, sed molestiae maxime laborum dolore laboriosam illum perspiciatis? In veniam iure aliquid inventore accusantium quo officia iusto doloribus molestiae? Voluptate, officia. Impedit ipsa ipsam repellendus, incidunt voluptatum sint omnis porro natus! Laudantium iste aut nihil sequi voluptatibus quos ab atque. Porro quia alias voluptatibus. A in porro inventore doloremque."
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptates aperiam ducimus! Minus eligendi hic architecto asperiores nostrum ratione impedit, debitis quia dignissimos tempora similique soluta iure? Dolorem mollitia nam sed ipsum tempore incidunt necessitatibus, laborum soluta nesciunt ipsa esse voluptate ex nemo iusto corrupti eius vel similique a saepe officiis optio quia delectus ab sit. Sint possimus earum, magni nam nesciunt vitae qui eos magnam aliquid optio dolores ratione commodi voluptatum odit deleniti ex obcaecati saepe laudantium! Quasi inventore aliquam cum mollitia quos reprehenderit numquam veritatis sint praesentium accusamus repudiandae reiciendis, quae recusandae! Quos iure nemo nostrum adipisci quasi?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
