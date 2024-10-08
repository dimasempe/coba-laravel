<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in '. $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username',request('author'));
            $title = ' by '. $author->name;
        }
        // if(request('search')){
        //     $posts->where('title','like','%'.request('search').'%')
        //     ->orWhere('body','like','%'.request('search').'%');
        // }
        // dd(request('search'));
        return view('posts',[
            'title' => 'All Posts'.$title,
            // 'posts' => \App\Models\Post::all()
            // 'posts'=>Post::latest()->get(),
            // 'posts'=>Post::latest()->filter(request(['search','category','author']))->get(),
            'posts'=>Post::latest()->filter(request(['search','category','author']))->paginate(7)
                                                                            ->withQueryString(),
            'active'=>'blog'
        ]);
    }

    public function show(Post $post){
        return view('post',[
            'title' => 'Single Post',
            'active' => 'blog',
            'post' => $post
            // 'post' => \App\Models\Post::find($slug)
        ]);
    }
}
