<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // $search = request()->query('search');
        // if($search){
        //     //dd(request()->query('search'));
        //     $posts = Post::where('title','LIKE', "%{$search}%");
        // }else{
        //     $posts = Post::all();
        // }
        return view('welcome')
        ->with('categories', Category::all())
        ->with('posts', Post::all())
        ->with('tags', Tag::all());
    }

    public function search(Request $request)
    {
        
        $query= request()->query('query');
        if($query){
            $posts= Post::where('title','like', "%{$query}%")->get();
        }else{
            $posts = Post::all();
        }
        return view('news.search-results')
        ->with('categories', Category::all())
        ->with('posts',$posts)
        ->with('tags', Tag::all());
    }
}
