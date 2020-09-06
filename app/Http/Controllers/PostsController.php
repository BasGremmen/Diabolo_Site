<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User\User;


class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth',['only' => ['create','store']]);
		$this->middleware('is_admin',['only'=>['create','store']]);
	}
    //
	public function index()
	{
		$posts = Post::latest()->get();
		return view('posts.overview',compact('posts'));
	}
	
	public function show($id)
	{
		$post = Post::find($id);
		return view('posts.show',compact('post'));
	}
	
	public function create()
	{
		return view('posts.create');
	}
	
	public function store(Request $request)
	{
		$this->validate(request(), [
			
			'title' => 'required',
			'body' => 'required',
			'image' => 'mimes:jpeg,bmp,png'
		
		]);
		
		
		
		if($request->hasFile('image')){
			$path = $request->image->store('images');			
		}
		
		$post = new Post;
		
		if(isset($path)){
			$post->image = $path;
		} else {
			$post->image = request('image');
		}
		
		$post->title = request('title');
		$post->body = request('body');
		$post->user_id = Auth::id();
		
		$post->save();
		
		return redirect('/');
	}
}
