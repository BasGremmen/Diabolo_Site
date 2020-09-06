@extends('layout')

@section('content')

<div class="row">
	
	<div class="col-sm-8 big-block">

		<h1>Admin panel</h1>
		<hr>

		<div class="row">

			<div class="col-sm-6">

			<ul class="list-unstyled mb-0">
	        	<li><a href="{{url('/anarchaat/create')}}">Nieuw anarchaat</a></li>
	            <li><a href="{{url('/register')}}">Nieuwe faust</a></li>
	            <li><a href="{{url('/category/1/activity/create')}}">Nieuwsbericht</a></li>
	        </ul>

	    	</div>

	    	<div class="col-sm-6">

	        <ul class="list-unstyled mb-0">
	        	<li><a href="{{url('/category/create')}}">Nieuwe categorie</a></li>
	        </ul>

	   		</div>

    	</div>


		</ul>

	</div>

</div>

@endsection