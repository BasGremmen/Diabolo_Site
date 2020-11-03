<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Category;
use App\File;
use Illuminate\Http\Request;
use App\Http\Requests\ActivityRequest;
use Illuminate\Support\Facades\Storage;
use Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['only' => ['create','store']]);
        $this->middleware('is_admin',['only'=>['create','store']]);
    }

    public function index($id)
    {
        if(Auth::check()){
            $activities = Activity::where('category_id',$id)->get();
        } else {
            $activities = Activity::where('category_id',$id)->where('deo',false)->get();
        }

        $activities = $activities->sortByDesc('date');

        $category = Category::find($id);
        $files = Storage::allFiles('img\general\default'); 

        if($category->isImportant && !$category->isText){

            return view('posts.overview',compact('activities','category'))->with('files',$files);

        } elseif($category->isImportant && $category->isText) {

            return view('activities.textview',compact('activities','category'))->with('files',$files);

        } elseif(!$category->isImportant && !$category->isText){

            return view('activities.overview',compact('activities','category'))->with('files',$files);

        } else {

            return view('activities.textview',compact('activities','category'))->with('files',$files);

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $category = Category::find($id);

        if ($category->isImportant && Auth::check() && Auth::user()->type == "admin"){

            return view('activities.create',compact('category'));

        } elseif (!$category->isImportant){

            return view('activities.create',compact('category'));

        } else {

            return redirect(url('/category/'.$id.'/activity'));
        }
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActivityRequest $request)
    {
        $activity = Activity::create($request->all());

        if(isset($request->deo) && $request->deo){

            $activity->deo = true;

        } else {

            $activity->deo = false;

        }

        $activity->user_id = Auth::id();

        $activity->save();

        if(isset($request->images)){
            foreach($request->images as $image){

                $filename = $image->store('images/activities/'.$activity->name);
                File::create([
                    'activity_id' => $activity->id,
                    'filename' => $filename,
                    'filetype' => "img"
                ]);
            }
        }

        if(isset($request->videos)){
            foreach($request->videos as $video){

                $filename = $video->store('videos/activities/'.$activity->name);
                File::create([
                    'activity_id' => $activity->id,
                    'filename' => $filename,
                    'filetype' => "vid"
                ]);
            }
        }

        return redirect(url('/category'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show($category,$id)
    {
        $activity = Activity::find($id);
        $files = Activity::find($id)->files;
        
        return view('activities.show',compact('activity','files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,Activity $activity)
    {
        return view('activities.edit',compact('category','activity'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category, Activity $activity)
    {

        $this->validate(request(), [
            
            'name' => 'required',
            'body' => 'required'
        
        ]);  


        $activity->name = request('name');
        $activity->body = request('body');

        $activity->save();

        if(isset($request->images)){
            foreach($request->images as $image){

                $filename = $image->store('images/activities/'.$activity->name);
                File::create([
                    'activity_id' => $activity->id,
                    'filename' => $filename,
                    'filetype' => "img"
                ]);
            }
        }

        if(isset($request->videos)){
            foreach($request->videos as $video){

                $filename = $video->store('videos/activities/'.$activity->name);
                File::create([
                    'activity_id' => $activity->id,
                    'filename' => $filename,
                    'filetype' => "vid"
                ]);
            }
        }

        return redirect(url('/category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
    }
}
