@extends('layouts.main')

@section('konten')
<h2 class="mb-5">Post Categories</h2>

    @foreach ($categories as $category)
    <ul>
        <li>
            <h5><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></h5>
        </li>
    </ul>
    @endforeach
@endsection
