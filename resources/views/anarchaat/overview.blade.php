@extends('layout')

@section('content')

<div class="row">

<div class="col-md-12 big-block">

<h1>Anarchaten door de jaren heen</h1>

@foreach ($anarchaten as $anarchaat)

<div class="row">
	
    
    <div class="col-md-12">
	<h4>Anarchaat {{$anarchaat->timespan}}</h4>
    
    <div class="row">
    
        <div class="col-md-4">
        
        <a href="{{url('/users/')}}/{{$anarchaat->secretus_id}}">
        
        	@include('partials.image',['image' => $users->find($anarchaat->secretus_id)->image])
            
            <h6>Secretus</h6>
            <h6 class="white-text">{{$users->find($anarchaat->secretus_id)->name}}</h6>
            
        </a>
        
        </div>
    
        <div class="col-md-4">
        
        <a href="{{url('/users/')}}/{{$anarchaat->ultimo_id}}">
        
        	@include('partials.image',['image' => $users->find($anarchaat->ultimo_id)->image])
            
            <h6>Ultimo</h6>
            <h6 class="white-text">{{$users->find($anarchaat->ultimo_id)->name}}</h6>
        
        </a>
            
        </div>
    
        <div class="col-md-4">
        
        <a href="{{url('/users/')}}/{{$anarchaat->secretus_id}}">
        
        	@include('partials.image',['image' => $users->find($anarchaat->charon_id)->image])
            
            <h6>Charon</h6>
            <h6 class="white-text">{{$users->find($anarchaat->charon_id)->name}}</h6>
            
        </a>
        
        </div>
    
    </div>
    

	</div>
    
</div>

@endforeach

</div>

</div>

@endsection