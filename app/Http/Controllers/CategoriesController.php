<?php

namespace Allutomotive\Http\Controllers;

use Allutomotive\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * CategoriesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::latest()->get();

        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);
        $input['name']= $request->name;
        $input['importance']=$request->importance;

        Category::create($input);

        return redirect('/categories/index')
            ->with('success','Successfully created a new Category');

    }

    /**
     * Display the specified resource.
     *
     * @param  \Allutomotive\Category  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $category = posts()->latest()->get();

        return view('categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Allutomotive\Category  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Allutomotive\Category  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $cathegory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Allutomotive\Category  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();

        return back()
            ->with('success','Category deleted');
    }
}
