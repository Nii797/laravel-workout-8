@extends('layouts.main')

@section('container')

    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}

    <a href="/blog">Back to post</a>

@endsection
