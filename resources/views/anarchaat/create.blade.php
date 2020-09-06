@extends('layout')

@section('content')

<div class="row">

	<div class="col-md-8">
    
        <div class="mb-4">
        
            <h1 class="yellow-text">Nieuw anarchaat</h1>
            
            <div class="padding-3px">
            
                    <form class="white-text" method="POST" action="/anarchaat" enctype="multipart/form-data" id="anarchaatform">
                    
                      {{csrf_field()}}
                      
                      <div class="form-group">
                      
                        <label for="timespan">Jaar van anarchaat</label>
                        <input type="text" class="form-control" id="timespan" name="timespan" >
                        
                      </div>
                      
                      <div class="form-group">
                      
                        <label for="secretus_id">Secretus</label>
                        
                        <select name="secretus_id" form="anarchaatform">
                        
                        	@include('anarchaat.options',['lazari' => $users])
                        
                        </select>
                        
                      </div>
                      
                      <div class="form-group justify-content-center">
                      
                        <label for="ultimo_id">Ultimo</label>
                        
                        <select name="ultimo_id" form="anarchaatform">
                        
                        	@include('anarchaat.options',['lazari' => $users])
                        
                        </select>
                        
                      </div>
                      
                      <div class="form-group">
                      
                        <label for="charon_id">Charon</label>
                        
                        <select name="charon_id" form="anarchaatform">
                        
                        	@include('anarchaat.options',['lazari' => $users])
                        
                        </select>
                        
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Plaats</button>
                      
                     @include('partials.errors')
                     
                    </form>
        	</div>
            
        </div>
        
    </div>
    
</div>

@endsection