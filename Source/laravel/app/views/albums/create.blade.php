@extends('master')


@section('content')
	{{ Form::open(array('url' => 'albums/create', 'method' => 'post', 'role' => 'form')) }}
	<div class="form-group">
		{{ Form::label('name', 'Album Name:', array('class' => 'control-label'))}}
		{{ Form::text('name', '', array('id' => 'name', 'class' => 'form-control')) }}
	</div>
		{{ Form::submit('Add album', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}
@stop