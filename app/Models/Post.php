<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
        "title" => "Judul Post  Pertama",
        "author" => "Edwin",
        "slug" => "judul-post-pertama",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste labore repudiandae fugit maiores consequuntur fuga vitae. Consequuntur laborum, natus error vel nihil dignissimos non ducimus amet eligendi inventore blanditiis sed veniam voluptates nesciunt deserunt rerum doloribus quasi aut et est fugit. Dolorem expedita, possimus saepe praesentium exercitationem est nesciunt soluta minima facere repellat vel autem officia corporis fuga pariatur, hic veniam fugiat adipisci facilis quaerat vero. Non cum officia voluptatibus exercitationem a laudantium, dolore veritatis quia eum velit sapiente praesentium!"
    ],
    [
        "title" => "Judul Post  Kedua",
        "author" => "Sarip",
        "slug" => "judul-post-kedua",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste labore repudiandae fugit maiores consequuntur fuga vitae. Consequuntur laborum, natus error vel nihil dignissimos non ducimus amet eligendi inventore blanditiis sed veniam voluptates nesciunt deserunt rerum doloribus quasi aut et est fugit. Dolorem expedita, possimus saepe praesentium exercitationem est nesciunt soluta minima facere repellat vel autem officia corporis fuga pariatur, hic veniam fugiat adipisci facilis quaerat vero. Non cum officia voluptatibus exercitationem a laudantium, dolore veritatis quia eum velit sapiente praesentium!"
    ], 
    ];

    public static function all(){
        return self::$blog_posts;
    }

}
