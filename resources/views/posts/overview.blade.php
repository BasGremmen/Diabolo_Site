@extends('layout')

@section('content')
<div class="row">


<div class="col-md-12">
@foreach ($activities as $activity)

@php

  $files = App\Activity::find($activity->id)->files->take(1);

@endphp

  @include('posts.post')
  <hr />
  
@endforeach

</div>

</div>

@endsection