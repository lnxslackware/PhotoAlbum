<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Photo Album&copy;</title>
	{{HTML::script('js/jquery.js') }}
	{{HTML::script('js/bootstrap.js') }}
	{{HTML::style('css/bootstrap.css') }}
	{{HTML::style('css/photoalbum.css') }}
</head>
<body>
	<div class="row-fluid">
		<div class="span12 well">
			<h1>Awesome Photo Album</h1>
		</div>
	</div>
	<div class="row">
		<div class="span3">
			<ul class="nav nav-list">
				@if(Auth::user())
					<li class="nav-header">{{ ucwords(Auth::user()->username) }}</li>
					<li>{{ HTML::link('post', 'Add new category') }}</li>
					<li>{{ HTML::link('post', 'Add new album') }}</li>
					<li>{{ HTML::link('post', 'Post a comment') }}</li>
					<li>{{ HTML::link('post', 'Upload photos') }}</li>
					<li>{{ HTML::link('users', 'View users') }}</li>
					<li>{{ HTML::link('logout', 'Logout') }}</li>
				@else
					<li>{{ HTML::link('login', 'Login') }}</li>
				@endif
			</ul>
		</div>
		<div class="span9">
			@yield('content')
		</div>
	</div>
	@section('form-modals')
		@if (Auth::check())
			@include('plugins.upload_modal')
		@endif
</body>
</html>