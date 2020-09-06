@extends('layout')

@section('content')

<div class="row">
	
	<div class="col-sm-12">
		
		<h1>De liederen van DIABOLO</h1>
		<hr>

		<ul>
			
			@foreach($songs as $song)

			<a href="{{url('')}}"><li>{{$song-title}}</li></a>

			@endforeach

		</ul>

	</div>

</div>

@endsection