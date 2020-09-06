@extends('layout')

@section('content')

<div class="row">

	<div class="col-md-12 big-block">

    <h1>Creeër post</h1>

    <hr>

    <div class="padding-3px">

            <form method="POST" action="/category/{{$category->id}}/activity" enctype="multipart/form-data">
            
              {{csrf_field()}}

              <input type="hidden" name="category_id" value="{{$category->id}}">
              
              <div class="form-group">

                <label for="name">Naam activiteit</label>
                <input type="text" class="form-control" id="name" name="name" >

              </div>
              
              <div class="form-group">

                <label for="body">Tof verhaaltje</label>
                <textarea id="body" name="body" rows="14" class="form-control" ></textarea>

              </div>

              <div class="form-group">
                
                <label for="date">Datum</label>
                <input type="date" name="date" id="date" class="form-control">

              </div>
              
              @if(!$category->isText)

              <div class="form-group">

                <label for="images">Fotootjes erbij?</label>
                <input type="file" class="file-input" id="images" name="images[]" multiple />

              </div>

              <div class="form-group">

                <label for="videos">Videootje erbij?</label>
                <input type="file" class="file-input" id="videos" name="videos[]" multiple />

              </div>

              @endif

              <div class="form-group">
                
                <label for="deo">Alleen voor Diabolo?</label>
                <input name="deo" type="checkbox" class="form-control" id="deo" value="true" checked>

              </div>

              <button type="submit" class="btn btn-default">Plaats</button>
              
             @include('partials.errors')

            </form>

	   </div>

    </div>
    
</div>

@endsection