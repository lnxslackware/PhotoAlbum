@extends('master')

@section('content')
	<div class="span4 well">
		<legend>Would you like to:</legend>
		<div class="btn-group" role="group" aria-label="...">
			<button type="button" class="btn btn-default" onclick="$('#upload_modal').modal({backdrop: 'static'});">Upload a photo?</button>
			<button type="button" class="btn btn-default">Add new category?</button>
			<button type="button" class="btn btn-default">Add new album?</button>
		</div>
	</div>
@stop