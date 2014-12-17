@extends('master')

@section('content')
<div class="row">
	@foreach($ownAlbums as $album)
	<div class="col-xs-6 col-md-3">
		<div class="thumbnail">
		<a href="/albums/{{$album->id}}/viewPhotos">
			<img data-src="" src="/img/album-default.png" width="100" alt="...">
			<div class="caption">
				<h3>{{$album->name}}</h3>
			</div>
		</a>
				<p>
					<a href="/albums/{{$album->id}}/edit" class="btn btn-primary" role="button">Edit</a>
					<a href="/albums/{{$album->id}}/delete" class="btn btn-danger" role="button">Delete</a>
				</p>
		</div>
	</div>
	@endforeach
</div>
@stop