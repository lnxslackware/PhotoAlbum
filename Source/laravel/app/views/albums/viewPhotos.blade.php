@extends('master')

@section('content')
    <div id="voting">
        <p>Vote for this album</p>
        {{ Form::open(array('url' => "/votes/$photos[0]->album_id", 'method' => 'post')) }}
        <p>
        {{ Form::selectRange('vote', 1, 10) }}
        </p>
        <input type="submit" class="btn btn-mini" name="submit" value="Vote!">
        {{ Form::close() }}
    </div>
    <div class="row">
    	@foreach($photos as $photo)
    	<div class="span3">
    		<div class="thumbnail">
    		<a href="/photo/{{$photo->id}}">
    			<img src="/uploads/{{$photo->img_name}}" alt="{{$photo->title}}">
    			<div class="caption">
    				<h3>{{$photo->title}}</h3>
    			</div>
    		</a>
    		<p>Added on: {{$photo->created_at}}</p>
    		</div>
    	</div>
    	@endforeach
    </div>
@stop