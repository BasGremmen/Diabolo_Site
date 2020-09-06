<!-- Blog Post -->
<div class="card mb-4 padding-3px">

    <h2 class="card-header">

        <a href="/category/{{$category->id}}/activity/{{$activity->id}}">
            {{$activity->name}}
        </a>
        
    </h2>
        
        @isset($files)

        <hr>

        <div class="row justify-content-center">

        @foreach($files as $file)

        @if($file->filetype === "img")

        <div class="col-sm-4">

          <img src="{{url('/storage')}}/{{$file->filename}}">

        </div>

        @endif

        @if($file->filetype === "vid")

        <div class="col-sm-4">
          
          <video width="auto" height="auto" controls>
            <source src="{{url('/storage')}}/{{$file->filename}}">
          </video>

        </div>

        @endif

        @endforeach

        </div>

        @endisset
        
    <div class="card-body bg-black-opaque border-none">
    
      <p class="card-text">{!!nl2br(e($activity->body))!!}</p>
      <hr />
      
      <p class="card-text">Gepaald op {{$activity->date->format('Y-m-d')}} by <a class="username-link" href="/users/{{$activity->user_id}}">{{DB::table('users')->where('id',$activity->user_id)->value('name')}}</a></p>
      
    </div>
    
</div>