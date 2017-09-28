<?php

namespace Allutomotive\Http\Controllers;

use Allutomotive\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth')->except(['index', 'show']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {

        $this->validate($request,[

            'title'=> 'required',

            'body' => 'required',

            'description' => 'required',

            'featured_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'keywords' => 'required'
        ]);

        $input['featured_photo'] = time().'.'.$request->featured_photo->getClientOriginalExtension();
        $request->featured_photo->move(public_path('images'), $input['featured_photo']);

        $input['title']= $request->title;
        $input['body']=$request->body;
        $input['description']=$request->description;
        $input['keywords']=$request->keywords;
        $input['importance']=$request->importance;

        $input['user_id']= auth()->id();
        $input['category_id']=$request->category_id;

        Post::create($input);

        return back()
            ->with('success','Successfully posted');

    }

    /**
     * Display the specified resource.
     *
     * @param  \Allutomotive\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Allutomotive\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Allutomotive\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Allutomotive\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();

        return back()
            ->with('success', 'Post Deleted');
    }
}
