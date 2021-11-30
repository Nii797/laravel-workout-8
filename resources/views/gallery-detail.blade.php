@extends('layouts.main')

@section('container')

    <h1 class="mt-4">Detail Gallery</h1>
    <article class="mt-4">
        <img src="/img/{{ $gallery["image"] }}" alt="Gambar Gallery" width="400">
        <h2>{{ $gallery["title"] }}</h2>
        <p>{{ $gallery["body"] }}</p>
        <a href="/gallery">Back to Gallery</a>
    </article>

@endsection
