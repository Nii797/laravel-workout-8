<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    
        User::create([
            'name' => 'Soni Hidayatulloh',
            'email' => 'sonihidayatulloh797@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Ririn Novita',
            'email' => 'ririn_n123@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Pemograman',
            'slug' => 'pemograman'
        ]);

        Category::create([
            'name' => 'Web Desaign',
            'slug' => 'web-desaign'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 2,
            'title' => 'Belajar React js',
            'slug' => 'belajar-react-js',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga excepturi voluptatibus eligendi eaque odit nostrum odio laborum quis neque dignissimos!</p>',
            'body' => ' <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem possimus delectus non quaerat et doloremque vitae animi nisi voluptates ut.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe expedita voluptatem ea! Quidem, assumenda provident. Voluptate praesentium reprehenderit libero. Voluptatum libero assumenda, consequuntur debitis aut dolor nisi, incidunt ad quidem iusto, enim provident repellat necessitatibus. Aperiam illo et deleniti. Voluptate in rerum voluptatibus placeat, consequatur autem fugiat adipisci deserunt doloremque.</p>'
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 2,
            'title' => 'Belajar PHP',
            'slug' => 'belajar-php',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga excepturi voluptatibus eligendi eaque odit nostrum odio laborum quis neque dignissimos!</p>',
            'body' => ' <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem possimus delectus non quaerat et doloremque vitae animi nisi voluptates ut.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe expedita voluptatem ea! Quidem, assumenda provident. Voluptate praesentium reprehenderit libero. Voluptatum libero assumenda, consequuntur debitis aut dolor nisi, incidunt ad quidem iusto, enim provident repellat necessitatibus. Aperiam illo et deleniti. Voluptate in rerum voluptatibus placeat, consequatur autem fugiat adipisci deserunt doloremque.</p>'
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Belajar Laravel',
            'slug' => 'belajar-laravel',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga excepturi voluptatibus eligendi eaque odit nostrum odio laborum quis neque dignissimos!</p>',
            'body' => ' <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem possimus delectus non quaerat et doloremque vitae animi nisi voluptates ut.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe expedita voluptatem ea! Quidem, assumenda provident. Voluptate praesentium reprehenderit libero. Voluptatum libero assumenda, consequuntur debitis aut dolor nisi, incidunt ad quidem iusto, enim provident repellat necessitatibus. Aperiam illo et deleniti. Voluptate in rerum voluptatibus placeat, consequatur autem fugiat adipisci deserunt doloremque.</p>'
        ]);
    }
}
