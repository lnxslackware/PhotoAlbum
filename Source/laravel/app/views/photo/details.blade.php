@extends('master')

@section('content')
	<div id="photo-details">
		<h1>{{$photo->title}}</h1>
		<div id="photo-preview">
			<img src="/uploads/{{$photo->img_name}}" alt="{{$photo->title}}">
		</div>
		<p>
			<em>Added on: </em>{{$photo->created_at}}
		</p>
	</div>
	<div>
		<h3>Comments:</h3>
	</div>
@stop