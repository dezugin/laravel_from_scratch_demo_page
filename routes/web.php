<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use \App\Models\Category;
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

Route::get('/', [PostController::class, 'index'] )->name('home');
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post',[
        'post' => $post
    ]);
});
Route::get('categories/{category:slug}',function (Category $category){
    return view('posts',[
        'posts' => $category->posts,
        'currentCategory' =>$category,
        'categories' => Category::all()
    ]);
})->name('category');

Route::get('users/{user:username}',function (\App\Models\User $user){
    return view('posts',[
        'posts' => $user->posts,
        'categories' => Category::all()
    ]);
});