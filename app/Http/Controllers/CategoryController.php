<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth',['only' => ['create','store','edit','update']]);
        $this->middleware('is_admin',['only'=>['create','store','edit','update']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::allFiles('img\general\default'); 
        
		$categories = Category::all();
        return view('categories.overview')->with('files',$files);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            
            'name' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,bmp,png'
        
        ]);

        $category = new Category();

        if(isset($request->isImportant) && $request->isImportant){

            $category->isImportant = true;

        } else {

            $category->isImportant = false;

        }

        if(isset($request->isText) && $request->isText){

            $category->isText = true;

        } else {

            $category->isText = false;

        }
        
        
        
        if($request->hasFile('image')){
            $path = $request->image->store('images');           
        }
        
        if(isset($path)){
            $category->image = $path;
        } else {
            $category->image = request('image');
        }
        
        $category->name = request('name');
        $category->description = request('description');
        
        $category->save();
        
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate(request(), [
            
            'name' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,bmp,png'
        
        ]);        
        
        
        if($request->hasFile('image')){
            $path = $request->image->store('images');           
        }
        
        if(isset($path)){
            $category->image = $path;
        } else {
            $category->image = request('image');
        }
        
        $category->name = request('name');
        $category->description = request('description');
        
        $category->save();
        
        return redirect('/');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
