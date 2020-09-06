@extends('layout')

@section('content')

<div class="row">


    <div class="col-md-12">
    
        <h1 class="yellow-text">Diabolo</h1>

        <div class="row">
          
          <div class="col-sm-3">
            
            <a href="{{url('/users')}}"><h5>Iedereen</h5></a> 

          </div>

          <div class="col-sm-3">
            
            <a href="{{url('/status/0')}}"><h5>Fausten</h5></a> 

          </div>

          <div class="col-sm-3">
            
            <a href="{{url('/status/1')}}"><h5>Lazari</h5></a> 

          </div>

          <div class="col-sm-3">
            
            <a href="{{url('/status/2')}}"><h5>Detestoren</h5></a> 

          </div>

        </div>

        <hr>
    
        @foreach ($usersByYear as $year => $users)
        
          <h4>Jaargang {{$year}}</h4>
          <hr />
          
              @foreach ($users as $user)
              
                  @include('users.lazarus')
                  
              @endforeach
          
        @endforeach
    
    </div>
    
</div>

@endsection