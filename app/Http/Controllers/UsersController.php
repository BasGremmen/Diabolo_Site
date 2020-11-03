<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UsersController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth',['only' => ['update','edit']]);
	}

	public function groupedIndex($id)
	{
		$users = User::all()->sortByDesc('year');
		$users = $users->where('status',$id);
		$users = $users->groupBy('year');
		$usersByYear = $users;

		$files = File::allFiles('img\general\default');	
		return view('users.overview',compact('users','usersByYear'))->with('files',$files);
	}

    public function index()
	{
		$users = User::all()->sortByDesc('year');
		$users = $users->groupBy('year');
		$usersByYear = $users;

		$files = File::allFiles('img\general\default');			
		return view('users.overview',compact('users','usersByYear'))->with('files',$files);
	}
	
	public function show(User $user)
	{
		$files = File::allFiles('img\general\default');	
		return view('users.show',compact('user'))->with('files',$files);
	}
	
	public function edit()
	{
		return view('users.edit');
	}
	
	public function update(Request $request)
	{
		$this->validate(request(), [
			
			'name' => 'required',
			'email' => 'required',
			'image' => 'mimes:jpeg,bmp,png'
		
		]);
		
		$user = Auth::user();
		
		if($request->hasFile('image')){
			$user->image = $request->image->store('images/users');			
		}
		
		$user->name = request('name');
		$user->email = request('email');
		$user->study = request('study');
		$user->phone_home = request('phone_home');
		$user->phone_mobile = request('phone_mobile');
		$user->hobbies = request('hobbies');
		$user->committees = request('committees');
		$user->story = request('story');
		
		$user->save();
		
		return redirect('/users/'.Auth::user()->id);
	}
}
