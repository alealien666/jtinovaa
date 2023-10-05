@extends('layouts.main')

@section('konten')
<article>
    <h2 class="mb-4 text-decoration-none">{{ $post->judul }}</h2>
    <h6>By: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> In <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6><br>
    {!! $post->isi !!}
</article>

<a href="/blog" class="text-decoration-none d-block mt-5">Balek</a>
@endsection

