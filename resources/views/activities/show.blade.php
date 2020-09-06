@extends('layout')

@section('content')

	<div class="row">

		<div class="col-md-12 activity-show">
			
			<h1>{{$activity->name}}</h1>
			<hr>
			<p>{!!nl2br(e($activity->body));!!}</p>
			<hr>
			<h6>Gepaald op: {{$activity->date->format('Y-m-d')}}</h6>

			<div class="row">

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

	</div>

	</div>

@endsection