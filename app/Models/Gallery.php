<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Gallery
{

    private static $gallery = [

        [
            "image" => "1.jpg",
            "title" => "Gallery 1",
            "slug" => "gallery-1",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. At, cupiditate!"
        ],

        [
            "image" => "2.jpg",
            "title" => "Gallery 2",
            "slug" => "gallery-2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. At, cupiditate!"
        ]

    ];

    public static function all() {

        return collect(self::$gallery);

    }

    public static function find($slug) {

        $gallery = static::all();
        return $gallery->firstWhere('slug', $slug);

    }

}
