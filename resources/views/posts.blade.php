@extends('layouts.main')

@section('konten')
 <h1>Halaman Post</h1>
    @foreach ($posts as $post)
    <article class="pb-4 border-bottom">
        <h2 class="mt-5">
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->judul }}</a>
        </h2>
        <h6>By: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> In <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6><br>
        <p>{{ $post->excerpt }}</p>
        <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
    </article>
    @endforeach
@endsection

