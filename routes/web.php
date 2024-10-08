<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
// use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home',[
        'active'=>'home',
        'title'=>'Home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'active'=>'about',
        'title' => 'About',
        'name' => 'Dimas Maulana P',
        'email' => 'dimas.maulanaputra13@gmail.com',
        'image' => 'dimas.png'
    ]);
});



Route::get('/posts', [PostController::class,'index']);
// halaman single post
Route::get('/posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories',function(){
    return view('categories',[
        'active' => 'categories',
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');



Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('auth');


// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'active' => 'categories',
//         'title' => "Post by Category: $category->name",
//         'posts' => $category->posts->load('category','author')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts',[
//         'title' => "Post by Author: $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category','author')
        
//     ]);
// });
?>

