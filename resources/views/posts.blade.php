{{-- @dd($posts) --}}

@extends('layouts.main')
@section('container')

    <h1 class='mb-3 text-center'>{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name='category' value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name='author' value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name='search' value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit" id="search">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    <div class="card mb-3">
        {{-- https://picsum.photos/120/40 --}}
        {{-- https://random-image-pepebigotes.vercel.app/api/random-image --}}
        {{-- https://random.danielpetrica.com/api/random --}}
        @if ($posts[0]->image)
        {{-- <div style='max-height: 350px; overflow:hidden;'></div> --}}
            <img src="{{ asset('storage/'.$posts[0]->image) }}" class='card-img-top' alt="{{ $posts[0]->image }}" style="max-height: 400px; width: auto;">
        @else
            <img loading='lazy' src="https://picsum.photos/1200/400"  class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
        
        <div class="card-body text-center">
          <h5 class="card-title">{{ $posts[0]->title }}</h5>    
          
          <p>
            <small class='text-muted'>
                By <a href="/posts?author={{ $posts[0]->author->username }}" class='text-decoration-none'>{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class='text-decoration-none'>{{ $posts[0]->category->name }}</a>
                {{ $posts[0]->created_at->diffForHumans() }}
            </small>   
        </p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/posts/{{ $posts[0]->slug}}" class='text-decoration-none'>Read more...</a>
        </div>
    </div>
   
    
    
        
    
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card">
                    <div class='position-absolute px-2 py-1' style='background-color: rgba(0, 0, 0, 0.3)'><a href="/posts?category={{ $post->category->slug }}" class='text-decoration-none text-white'>{{ $post->category->name }}</a></div>
                    
                    @if ($post->image)
                    {{-- <div style='max-height: 350px; overflow:hidden;'></div> --}}
                        <img src="{{ asset('storage/'.$post->image) }}" class='card-img-top' alt="{{ $post->image }}" >
                    @else
                        <img src="https://picsum.photos/1200/600?random={{ mt_rand(1,100) }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p>
                        <small class='text-muted'>
                            By <a href="/posts?author={{ $post->author->username }}" class='text-decoration-none'>{{ $post->author->name }}</a> 
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>   
                    </p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug}}" class="btn btn-primary">Read more...</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @else 
    <p class="text-center fs-4">No post found.</p>
    @endif
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
    

    {{-- @foreach ($posts->skip(1) as $post)
    <article class='mb-5 border-bottom'>
        <a href="/posts/{{ $post->slug}}" class='text-decoration-none'>
            <h4>{{ $post->title }}</h4>
        </a>
        <p>By <a href="/authors/{{ $post->author->username }}" class='text-decoration-none'>{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class='text-decoration-none'>{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug}}" class='text-decoration-none'>Read more...</a>
    </article> 
    @endforeach --}}

@endsection


