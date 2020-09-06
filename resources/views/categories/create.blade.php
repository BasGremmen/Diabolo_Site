@extends('layout')

@section('content')

<div class="row">

	<div class="col-md-8">

        <div class="mb-4">

            <h1>Creeër categorie</h1>

            <div class="padding-3px">

                    <form class="white-text" method="POST" action="/category" enctype="multipart/form-data">
                    
                      {{csrf_field()}}
                      
                      <div class="form-group">
                        <label for="name">Naam categorie</label>
                        <input type="text" class="form-control" id="name" name="name" >
                      </div>
                      
                      <div class="form-group">
                        <label for="description">Omschrijving</label>
                        <textarea id="description" name="description" rows="14" class="form-control" ></textarea>
                      </div>

                      <div class="form-group">
                
                      <label for="isImportant">Komt deze categorie in de nav balk?</label>
                      <input name="isImportant" type="checkbox" class="form-control" id="isImportant" value="true" checked>

                      </div>

                      <div class="form-group">
                
                      <label for="isText">Text only?</label>
                      <input name="isText" type="checkbox" class="form-control" id="isText" value="true" checked>

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