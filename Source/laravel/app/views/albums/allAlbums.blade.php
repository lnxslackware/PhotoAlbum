@extends('master')

@section('content')
    <div class="row">
    	@foreach($albums as $album)
    	<div class="col-xs-6 col-md-3">
    		<div class="thumbnail">
    		<a href="/albums/{{$album->id}}/viewPhotos">
    			<img data-src="" src="/img/album-default.png" width="100" alt="...">
    			<div class="caption">
    				<h3>{{$album->name}}</h3>
    			</div>
    		</a>
    		<p>Owner: {{$album->owner_name}}</p>
    		<p>Created at: {{$album->created_at}}</p>
    		</div>
    	</div>
    	@endforeach
    </div>
@stop