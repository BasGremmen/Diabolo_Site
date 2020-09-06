@isset ($image)
    
    	<img class="img-square img-fluid mx-auto d-block" src="{{url('/storage').'/'.$image}}" />
        
@endisset
    
@empty ($image)
    	
        <img class="img-square img-fluid mx-auto d-block" src="{{url('/img/general/default.jpg')}}" />
        
@endempty