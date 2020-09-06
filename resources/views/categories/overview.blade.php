@extends('layout')

@section('content')

	<div class="row">
    
    	<div class="col-md-12">
        
        <h1>Categoriën</h1>
        
        @foreach($categories as $category)

        <a href="/category/{{$category->id}}/activity">
        
        	<div class="row">
            
            	<div class="col-md-3">
                
                	@include('partials.image',['image' => $category->image])
                
                </div>
                
                <div class="col-md-9">
                
                	<h4 class="right-align">
                    {{$category->name}}
                    </h4>
                    
                    <p>{{$category->description}}</p>
                
                </div>

            
            </div>

        </a>
            
        @endforeach
        
        </div>
    
    </div>

@endsection