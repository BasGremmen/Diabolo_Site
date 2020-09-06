@extends('layout')

@section('content')

	<div class="row">

		<div class="col-md-8">

			<h1>{{$category->name}}</h1>

			<div class="activity-list">

				@foreach($activities as $activity)

				<a href="/category/{{$category->id}}/activity/{{$activity->id}}">

					<div>

						<h3>{{$activity->name}}</h3>

					</div>

				</a>

				@endforeach

				@auth

				<a href="/category/{{$category->id}}/activity/create">
					
					<div>
						
						<h4>Nieuwe tekstpost  <i class="fa fa-plus"></i></h4>

					</div>

				</a>

				@endauth

			</div>

		</div>

	</div>

@endsection