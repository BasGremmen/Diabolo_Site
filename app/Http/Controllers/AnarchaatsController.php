<?php

namespace App\Http\Controllers;

use App\Anarchaat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AnarchaatsController extends Controller
{

    public function __construct() {
        $this->middleware('auth',['only'=>['create','store']]);
        $this->middleware('is_admin',['only'=>['create','store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anarchaten = Anarchaat::latest()->get();
		$users = User::all();
        $files = File::allFiles('img\general\default'); 
		
		return view('anarchaat.overview',compact('anarchaten','users'))->with('files',$files);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->where('status',1);
		return view('anarchaat.create',compact('users'));
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
			
			'timespan' => 'required'
		
		]);
		
		$anarchaat = new Anarchaat;
		
		$anarchaat->timespan = request('timespan');
		
		$anarchaat->secretus_id = request('secretus_id');
		$anarchaat->ultimo_id = request('ultimo_id');
		$anarchaat->charon_id = request('charon_id');
		
		$anarchaat->save();
		
		return redirect('/anarchaat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anarchaat  $anarchaat
     * @return \Illuminate\Http\Response
     */
    public function show(Anarchaat $anarchaat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anarchaat  $anarchaat
     * @return \Illuminate\Http\Response
     */
    public function edit(Anarchaat $anarchaat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anarchaat  $anarchaat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anarchaat $anarchaat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anarchaat  $anarchaat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anarchaat $anarchaat)
    {
        //
    }
}
