{{-- @dd($post); --}}

@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class='mb-3'>{{ $post->title }}</h1>
    <p>By <a href="/posts?author={{ $post->author->username }}" class='text-decoration-none'>{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class='text-decoration-none'>{{ $post->category->name }}</a></p>
    
    
    @if ($post->image)
    {{-- <div style='max-height: 350px; overflow:hidden;'></div> --}}
        <img src="{{ asset('storage/'.$post->image) }}" class='img-fluid' alt="{{ $post->image }}" >
    @else
        <img src="https://picsum.photos/700/350?random" class='img-fluid' alt="{{ $post->category->name }}">
    @endif

    <article class='my-3'>
        {!! $post->body  !!} 
    </article>
    
    <a href="/posts" class='d-block mt-3'>Back to posts</a>
        </div>
    </div>
</div>

 



@endsection


