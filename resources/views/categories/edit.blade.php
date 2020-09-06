@extends('layout')

@section('content')

	<div class="row">
    
    	<div class="col-md-12 big-block">
        
        	<h1 class="yellow-text">Pas categorie aan</h1>
            
            <hr>
            
            	<form method="POST" action="/category/{{$category->id}}" enctype="multipart/form-data">
                    
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="PUT">
                      
                      <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" >
                      </div>
                      
                      <div class="form-group">
                        <label for="description">Omschrijving</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{$category->description}}" >
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