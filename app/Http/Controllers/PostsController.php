<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\Posts\CreatePostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
//Not required due to Way 2
//use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __contruct()
    {
        $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        return view ('posts.index')->with('posts', Post::all());
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create')->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //upload the image to storage
        $image = $request->image->store('posts');
        //dd($request->image>store('posts'));
        //dd($request->image);

        //create the post

        //flash message

        $post = Post::create([
             'title'=>$request->title,
             'description'=>$request->description,
             'content'=>$request->content,
             'image'=>$image,
             'published_at'=>$request->published_at,
             'category_id'=>$request->category
         ]);

         if( $request->tags)
         {
             $post->tags()->attach($request->tags);
         }

         session()->flash('success','Post Created Successfully');

        //redirect the user
         return redirect(route('posts.index')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.create')->with('post', $post)->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //tip: not Secure below one
        // $date = $request->all();
        $data = $request->only(['title', 'description', 'published_at', 'content']);
        //A1. check if new image
        if ($request->hasFile('image')){
            //A1.1 upload it
            $image = $request->image->store('posts');
            //A1.2 delete old one
            //Way 1: Before mod in Post Model
            //Storage::delete($post->image);
            //Way 2
            $post->deleteImage();
            $data['image']=$image;
        }

        //B1. tags
        if($request->tags){
            $post->tags()->sync($request->tags);
        }

        //A2. update attribute
        $post->update($data);
            
        //A3. flash message
        session()->flash('success', 'Post Updated Successfully');
        //redirect the user
        return redirect(route('posts.index'));
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();
        if($post->trashed()){
            //1.2 delete old one
            //Way 1: Before mod in Post Model
            //Storage::delete($post->image);
            //Way 2
            $post->deleteImage();
            $post->forceDelete();
        } else{
            $post->delete();
        }

        session()->flash('success', 'Post deleted successfully');

        return redirect(route('posts.index'));
    }
    /**
     * Display list of all trashed posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $trashed = Post::onlyTrashed()->get();
        return view('posts.index')->withPosts($trashed);
        //same thing as above. the below part
        //return view('posts.index')->with('posts', $trashed);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();
        $post->restore();
        session()->flash('success', 'Post restored successfully');

        return redirect()->back();
    }
}
