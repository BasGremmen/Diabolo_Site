@extends('layout')

@section('content')
	<div class="row">
        <div class="col-md-12 big-block">
        
        	<h1 class="yellow-text">{{$user->name}}</h1>
            <hr>
            
            <div class="row">
            	<div class="col-md-8">
                
                <h3 class="yellow-text">Jaargang {{$user->year}}</h3>
                <hr>
                
                <h4>Status: 
                @switch ($user->status)
                
                	@case(0)
                    Faust
                    @break
                    
                    @case(1)
                    Lazarus
                    @break
                    
                    @case(2)
                    Detestor
                    @break
                    
                    @default
                    Faust
                    @break
                
                @endswitch
                
                </h4>
                <hr />
                
                <h4>Geboorte datum: {{$user->birth_date}}</h4>
                <hr>
                
                @auth
                
                    <h4>Studie: {{$user->study}}</h4>
                    <hr>
                    
                    <h4>Email: {{$user->email}}</h4>
                    <hr>
                    
                    <h4>
                    Lid sinds:
                    
                    	@isset ($user->join_date)
                    	{{$user->join_date->format('Y-m-d')}} 
                        @endisset
                        
                        @isset ($user->leave_date)
                         tot: {{$user->leave_date->format('Y-m-d')}}
                        @endisset
                        
                    </h4>
                    <hr />
                    
                    <h4>Telefoon: {{$user->phone_home}}</h4>
                    <hr />
                    
                    <h4>Mobiel: {{$user->phone_mobile}}</h4>
                    <hr />
                    
                    <h4>Hobbies:</h4>
                    <p>{{$user->hobbies}}</p>
                    <hr />
                    
                    <h4>Commissies:</h4>
                    <p>{{$user->committees}}</p>
                    <hr />
                    
                    <h4>Lulverhaal:</h4>
                    <p>{{$user->story}}</p>
                    <hr />
                    
                @endauth
                
                </div>
                <div class="col-md-4">
                
                @isset ($user->image)
                
                <img class="img-fluid border-yellow" src="{{url('/storage')}}/{{$user->image}}" />
  
 	 			@endisset
  
  				@empty ($user->image)
  	
    				<img class="img-fluid border-yellow" src="{{url('/img/general/default.jpg')}}">
    
  				@endempty
                
                </div>
            </div>
        
        </div>
    </div>
    

@endsection
