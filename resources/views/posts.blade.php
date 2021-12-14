@extends('layouts.main')

@section('container')

    <h1 class="mt-4 mb-5">Halaman Blog Post</h1>

    @foreach ($posts as $post)

        <article class="mb- 5 border-bottom pb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>

            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> | <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            <p>{!! $post->excerpt !!}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more ...</a>
        </article>

    @endforeach

@endsection

{{-- Post::create([
    'category_id' => 1,
    'user_id' => 1, 
    'title' => 'Belajar MongoDB',
    'slug' => 'belajar-mongodb',
    'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga excepturi voluptatibus eligendi eaque odit nostrum odio laborum quis neque dignissimos!</p>',
    'body' => ' <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem possimus delectus non quaerat et doloremque vitae animi nisi voluptates ut.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe expedita voluptatem ea! Quidem, assumenda provident. Voluptate praesentium reprehenderit libero. Voluptatum libero assumenda, consequuntur debitis aut dolor nisi, incidunt ad quidem iusto, enim provident repellat necessitatibus. Aperiam illo et deleniti. Voluptate in rerum voluptatibus placeat, consequatur autem fugiat adipisci deserunt doloremque.</p>'
]); --}}

