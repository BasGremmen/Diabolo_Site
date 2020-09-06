@extends('layout')

@section('content')

<div class="row">

	<div class="col-md-8">

        <div class="mb-4">

            <h1>Creeër nieuwsbericht</h1>

            <div class="padding-3px">

                    <form class="white-text" method="POST" action="/posts" enctype="multipart/form-data">
                    
                      {{csrf_field()}}
                      
                      <div class="form-group">
                        <label for="title">Titel</label>
                        <input type="text" class="form-control" id="title" name="title" >
                      </div>
                      
                      <div class="form-group">
                        <label for="body">Text</label>
                        <textarea id="body" name="body" rows="14" class="form-control" ></textarea>
                      </div>
                      
                      <div class="form-group">
                        <label for="image">Plaatje erbij?</label>
                        <input type="file" class="file-input" id="image" name="image" />
                      </div>

                      <button type="submit" class="btn btn-default">Plaats</button>
                      
                     @include('partials.errors')

                    </form>
        	</div>

        </div>

    </div>
    
</div>

@endsection