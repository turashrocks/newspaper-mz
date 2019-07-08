<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Tag;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        return view('news.show')
        ->with('post', $post)
        ->with('posts', Post::all())
        ->with('categories', Category::all())
        ->with('tags', Tag::all());
    }

    public function category(Category $category)
    {
        return view ('news.category')
        ->with('category', $category)
        ->with('posts', $category->posts)
        ->with('categories', Category::all())
        ->with('tags', Tag::all());;
    }

    public function tag(Tag $tag)
    {
        return view ('news.tag')
        ->with('tag', $tag)
        ->with('posts', $tag->posts)
        ->with('categories', Category::all())
        ->with('tags', Tag::all());;
    }
}
