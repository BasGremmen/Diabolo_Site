<div class="lazari">

  <div class="row">
        
      <div class="col-sm-3">
      
      <a href="/users/{{$user->id}}">
      
      @include('partials.image',['image' => $user->image])
      
      </a>
      
      </div>
      
      <div class="col-sm-9">
      
        <h6 class="right-align yellow-text">
        {{$user->name}} {{$user->nickname}} {{$user->last_name}}
        </h6>
        
        <h6 class="right-align">
        Studie: {{$user->study}}
        </h6>
        
      </div>
      
  </div>
  
</div>