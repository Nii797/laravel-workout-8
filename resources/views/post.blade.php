@extends('layouts.main')

@section('container')

    <h2>{{ $post->title }}</h2>

    <p>By. <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/blog">Back to post</a>

@endsection

{{-- Post::find(3);
=> App\Models\Post {#4473
     id: 3,
     category_id: 3,
     title: "Post ke Tiga",
     slug: "post-ke-tiga",
     excerpt: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam tenetur magni minus excepturi rerum, incidunt placeat ab voluptatum accusantium veniam.",
     body: "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum incidunt, repellendus sequi nemo ratione sit, omnis doloremque eaque explicabo ipsum possimus vero voluptas deleniti nobis laborum! Id itaque modi perferendis? Veritatis facilis minima consequuntur asperiores nam eos natus rem. Quibusdam accusantium quae facilis illum labore repudiandae. Sapiente perspiciatis earum magnam?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur esse, omnis, aperiam saepe, nesciunt minus vitae consectetur suscipit sed vero dolores dicta dolore voluptatibus minima sequi dignissimos. Beatae ad explicabo nam voluptates hic iure dicta ex, placeat ratione fugiat totam ipsa minus vitae, debitis quia? Quo quidem vitae exercitationem in rerum alias delectus? Reiciendis deserunt dolorum, voluptates vel commodi perspiciatis rem possimus? Hic illo quis vero suscipit accusamus nam molestiae ipsam quibusdam totam deserunt, cupiditate, voluptate consequatur praesentium id similique?</p>",
     published_at: null,
     created_at: "2021-12-04 14:49:18",
     updated_at: "2021-12-04 14:49:18",
   } --}}
