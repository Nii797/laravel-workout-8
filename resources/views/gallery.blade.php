{{-- @dd($gallery) --}}

@extends('layouts.main')

@section('container')

    <h1 class="mt-4 text-center">Gallery</h1>

    @foreach ($gallery as $g)
        <article class="mt-5">
            <img src="img/{{ $g["image"] }}" alt="Gambar Gallery" width="400">
            <h2>{{ $g["title"] }}</h2>
            <p>{{ $g["body"] }}</p>
            <a href="/gallery/{{ $g['slug'] }}">Lihat Detail</a>
        </article>
    @endforeach

@endsection
