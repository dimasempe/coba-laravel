{{-- @dd($posts) --}}

@extends('layouts.main')
@section('container')

<h1 class='mb-5'>Post Categories</h1>


    

<div class="container">
    <div class="row">
        @foreach ( $categories as $category)
        <div class="col-md-4">
            <a href="/posts?category={{ $category->slug }}">
            <div class="card bg-dark text-white">
                <img class='img-fluid' loading='lazy' src="https://picsum.photos/1200/600?random={{ mt_rand(1,100) }}" class="card-img" alt="{{ $category->name }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-2 fs-3" style="background-color: rgba(0,0,0,0.3)">{{ $category->name }}</h5>
                  
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
    {{-- @foreach ($categories as $category)
    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </li>
    </ul>
    @endforeach --}}

@endsection


