<?php

namespace App\Models;


class Post 
{
    static $blog_market = [
        [
            "title" => "Judul Jual Pertama",
            "slug" => "judul-jual-pertama",
            "author" => "Dicky Marcell",
            "body" => "Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Omnis beatae, minima id enim 
            error repellat nobis soluta itaque ullam praesentium a, 
            quae, quam magnam architecto quos autem. Officia, cupiditate? 
            Corrupti?Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Illo ut nihil qui iure et nisi temporibus fugiat maiores ex distinctio 
            nemo dolorem aspernatur rerum totam, nesciunt culpa ipsam nulla animi?"
        ],
        [
            "title" => "Judul Jual Kedua",
            "slug" => "judul-jual-kedua",
            "author" => "Marcell Akbar",
            "body" => "Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Omnis beatae, minima id enim 
            error repellat nobis soluta itaque ullam praesentium a, 
            quae, quam magnam architecto quos autem. Officia, cupiditate? 
            Corrupti?Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Illo ut nihil qui iure et nisi temporibus fugiat maiores ex distinctio 
            nemo dolorem aspernatur rerum totam, nesciunt culpa ipsam nulla animi?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_market);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
