@extends('master')

@section('content')
	<div class="span3 well">
		<legend>Would you like to:</legend>
		<div class="btn-group">
			<button type="button" class="btn btn-primary" onclick="$('#upload_modal').modal({backdrop: 'static'});"><i class="icon-plus-sign icon-white"></i>Upload a photo?
			</button>
			<br/><br/>
			<button type="button" class="btn btn-primary" onclick="$('#upload_modal').modal({backdrop: 'static'});"><i class="icon-plus-sign icon-white"></i>Add new category?
			</button>
			<br/><br/>
			<button type="button" class="btn btn-primary" onclick="$('#upload_modal').modal({backdrop: 'static'});"><i class="icon-plus-sign icon-white"></i>Add new album?
			</button>
			<br/><br/>
		</div>
	</div>
@stop