<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">

  <div class="container">
  
    <a class="navbar-brand" href="/"><img src="{{url('/img/general/logo.jpg')}}" /></a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    
      <span class="navbar-toggler-icon"></span>
      
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
    
      <ul class="navbar-nav">
        
        @foreach($categories as $category)

        @if($category->isImportant)

        <li class="nav-item">
          
          <a class="nav-link" href="/category/{{$category->id}}/activity">{{$category->name}}</a>

        </li>

        @endif

        @endforeach
      
      	<li class="nav-item">
        
        	<a class="nav-link" href="/about">Over ons</a>
            
        </li>
        
        <li class="nav-item">
        
        	<a class="nav-link" href="/users">Leden</a>
            
        </li>
        
        <li class="nav-item">
        
        	<a class="nav-link" href="/rules">Statuten & HR</a>
            
        </li>

        <li class="nav-item">

            <a class="nav-link" href="/category">Activiteiten</a>

        </li>

        <li class="nav-item">
          
          <a class="nav-link" href="/anarchaat">Anarchaten</a>

        </li>
        
      </ul>
      
      <ul class="navbar-nav ml-auto">
      
        @auth

            @if(Auth::user()->type === "admin")

              <li class="nav-item"><a class="nav-link" href="/admin">Admin</a></li>

            @endif
        
            <li class="nav-item"><a class="nav-link" href="/users/edit">{{Auth::user()->name}}</a></li>
 
		    @endauth
        
        @guest
        	
            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>

		@endguest
        
      </ul>
      
    </div>
    
  </div>
  
</nav>