@extends('layouts.main')

@section('konten')
<h2>Post Category: {{ $category }}</h2>

    @foreach ($posts as $post)
    <article>
        <h2 class="mt-5 mb-3">
            <a href="/blog/{{ $post->slug }}">{{ $post->judul }}</a>
        </h2>
        <h6>By: {{ $post->pengarang }}</h6>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
@endsection
