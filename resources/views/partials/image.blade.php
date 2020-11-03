@isset ($image)
    
    	<img class="img-square img-fluid mx-auto d-block" src="{{url('/storage').'/'.$image}}" />
        
@endisset
    
@empty ($image)
    	
        <img class="img-square img-fluid mx-auto d-block" src="{{url($files[rand(0, count($files) - 1)])}}" />
        
@endempty