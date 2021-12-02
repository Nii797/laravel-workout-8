<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model

class Post
{
    private static $blog_post = [

        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Soni Hidyatulloh",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptatem fugit magnam exercitationem architecto. Rem adipisci at rerum quia odit officia quisquam alias? Nobis est dolorem repellendus eveniet repellat, quo, quod rem laudantium obcaecati dolores ipsam cupiditate, at maiores. Fugiat harum pariatur maxime laborum, dignissimos cumque inventore, est facere distinctio rem nemo? Commodi ab ratione debitis! Sapiente molestiae fugit enim quae! Ad nostrum ipsum, maiores soluta aut exercitationem nemo, autem obcaecati at repudiandae illum quam! Rem vel laborum facilis possimus?"
        ],

        [
            "title" => "Judul kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ririn Novita",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi temporibus natus magnam reprehenderit repellendus ea saepe, qui quia et facere porro omnis fugiat. Aspernatur sint officiis labore necessitatibus nam mollitia doloribus quo nostrum consequatur blanditiis? Dolorem quo commodi minus. Dolore sed laboriosam consequatur sapiente mollitia deleniti tempore error eligendi, quidem doloribus voluptas ullam fuga molestiae velit nesciunt unde veniam recusandae asperiores dolor natus, culpa sint nobis rem! Quibusdam accusantium voluptatibus laudantium hic magni distinctio atque excepturi consectetur a, ab voluptatem odit adipisci et ducimus molestias harum error vero debitis! Voluptas error distinctio quas totam cumque sint dolore quidem quis explicabo."
        ]

    ];

    public static function all() {

        // return self::$blog_post;
        return collect(self::$blog_post);

    }

    public static function find($slug) {

        // $posts = self::$blog_post;
        // $post = [];
        // foreach($posts as $p){
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        $posts = static::all();

        return $posts->firstWhere('slug', $slug);

    }
}
