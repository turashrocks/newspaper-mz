<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Sessions;
use Flash;
use App\Http\Requests\Tags\CreateTagRequest;
use App\Http\Requests\Tags\UpdateTagRequest;

class TagsController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tags.index')->with('tags', Tag::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTagRequest $request)
    {
        // VALIDATED ALLREADY IN CUSTOM REQUEST
        // $this->validate($request, [
        //     'name'=> 'required|unique:categories'
        // ]);

        Tag::create([
            'name' => $request->name
        ]);

        session()->flash('success', 'Tag created successfully');

        return redirect(route('tags.index'));
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
    public function edit(Tag $tag)
    {
        return view('tags.create')->with('tag', $tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        //WAY 1
        // $category->name = $request->name;
        //$category->save();

        //WAY 2
        $tag ->update([
            'name' => $request->name
        ]);
       

        session()->flash('success', 'Tag Updated Successfully');
        
        return redirect(route('tags.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        if($tag->posts->count()>0){
            session()->flash('error','Tag cannot be deleted as it has some posts');

            return redirect()->back();
        }
        $tag->delete();

        session()->flash('success','Tag deleted successfully');

        return redirect(route('tags.index'));
    }
}
