@extends('layout')

@section('content')

@if(Auth::id() == $activity->user_id || Auth::user()->is_admin)

	<div class="row">
    
    	<div class="col-md-12 big-block">
        
        	<h1 class="yellow-text">Pas post aan</h1>
            
            <hr>
            
            	<form method="POST" action="/category/{{$category->id}}/activity/{{$activity->id}}" enctype="multipart/form-data">
                    
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="PUT">
                      
                      <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$activity->name}}" >
                      </div>
                      
                      <div class="form-group">
                        <label for="body">Text</label>
                        <input type="text" class="form-control" id="body" name="body" value="{{$activity->body}}" >
                      </div>
                      
                      @if(!$activity->isText)

                      <div class="form-group">

                      <label for="images">Fotootjes erbij?</label>
                      <input type="file" class="file-input" id="images" name="images[]" multiple />

                      </div>

                      <div class="form-group">

                        <label for="videos">Videootje erbij?</label>
                        <input type="file" class="file-input" id="videos" name="videos[]" multiple />

                      </div>

                      @endif
                      
                      <div class="d-flex justify-content-center">
                      	<button type="submit" class="btn btn-default">Opslaan</button>
                      </div>
                      
                     @include('partials.errors')
                     
                 </form>
            	
        </div>
    
    </div>

@endif

@endsection