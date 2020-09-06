@extends('layout')

@section('content')

	<div class="row">
    
    	<div class="col-md-12 big-block">
        
        	<h1 class="yellow-text">Pas hier je info aan {{Auth::user()->name}}</h1>
            
            <hr>
            
            	<form method="POST" action="/users" enctype="multipart/form-data">
                    
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="PUT">
                      
                      <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}" >
                      </div>
                      
                      <div class="form-group">
                        <label for="nickname">Bijnaam</label>
                        <input type="text" class="form-control" id="nickname" name="nickname" value="" >
                      </div>
                      
                      <div class="form-group">
                        <label for="last_name">Achternaam</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="" >
                      </div>
                      
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" >
                      </div>
                      
                      <div class="form-group">
                        <label for="study">Studie</label>
                        <input type="text" class="form-control" id="study" name="study" value="{{Auth::user()->study}}" >
                      </div>
                      
                      <div class="form-group">
                        <label for="phone_home">Telefoon</label>
                        <input type="text" class="form-control" id="phone_home" name="phone_home" value="{{Auth::user()->phone_home}}" >
                      </div>
                      
                      <div class="form-group">
                        <label for="phone_mobile">Mobiel</label>
                        <input type="text" class="form-control" id="phone_mobile" name="phone_mobile" value="{{Auth::user()->phone_mobile}}" >
                      </div>
                      
                      <div class="form-group">
                        <label for="hobbies">Hobbies</label>
                        <textarea id="hobbies" name="hobbies" rows="4" class="form-control">{{Auth::user()->hobbies}}</textarea>
                      </div>
                      
                      <div class="form-group">
                        <label for="committees">Commissie's</label>
                        <textarea id="committees" name="committees" rows="4" class="form-control" >{{Auth::user()->committees}}</textarea>
                      </div>
                      
                      <div class="form-group">
                        <label for="story">Lulverhaal</label>
                        <textarea id="story" name="story" rows="4" class="form-control">{{Auth::user()->story}}</textarea>
                      </div>
                      
                      <div class="form-group">
                        <label for="image">Plaatje erbij?</label>
                        <input type="file" class="file-input" id="image" name="image" />
                      </div>
                      
                      <div class="d-flex justify-content-center">
                      	<button type="submit" class="btn btn-default">Opslaan</button>
                      </div>
                      
                     @include('partials.errors')
                     
                 </form>
            	
        </div>
    
    </div>

@endsection