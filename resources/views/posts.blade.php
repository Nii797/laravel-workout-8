@extends('layouts.main')

@section('container')

    <h1 class="mt-4">Halaman Blog Post</h1>

    @foreach ($posts as $post)
        <article class="mt-4 mb-5">
            <h2>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <h5>By: </h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection

