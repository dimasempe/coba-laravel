@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class='mb-3'>{{ $post->title }}</h1>
    <a href="/dashboard/posts" class='btn btn-success'><span data-feather='arrow-left'></span> Back to all my posts</a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class='btn btn-warning'><span data-feather='edit'></span> Edit</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method='post' class='d-inline'>
        @method('delete')
        @csrf
        <button onclick="return confirm('Are you sure?')" class='btn btn-danger'><span data-feather='x-circle'></span> Delete</button>
    </form>
    
    @if ($post->image)
        {{-- <div style='max-height: 350px; overflow:hidden;'></div> --}}
        <img src="{{ asset('storage/'.$post->image) }}" class='img-fluid mt-3' alt="">
    @else
        <img src="https://picsum.photos/700/350?random" class='img-fluid mt-3' alt="">
    @endif

    <article class='my-3'>
        {!! $post->body  !!} 
    </article>
    
    {{-- <a href="/posts" class='d-block mt-3'>Back to posts</a> --}}
        </div>
    </div>
</div>
@endsection