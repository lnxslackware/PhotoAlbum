@extends('master')

@section('content')
    <div class="row">
    	@foreach($albums as $album)
    	<div class="span3">
    		<div class="thumbnail">
    		<a href="/albums/{{$album->id}}">
    			<img src="/img/album-default.png" alt="{{$album->name}}">
    			<div class="caption">
    				<h3>{{$album->name}}</h3>
    			</div>
    		</a>
    		<p>Owner: {{$album->owner->username}}</p>
    		<p>Created at: {{$album->created_at}}</p>
    		</div>
    	</div>
    	@endforeach
    </div>
@stop