@extends('master')

@section('content')
    <div id="voting">
        <p>Vote for this album</p>
        <a href=""><i class="icon-thumbs-up icon-white"></i></a>
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