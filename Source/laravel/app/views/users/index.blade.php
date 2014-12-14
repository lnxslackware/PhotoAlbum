@extends('master')
@section('header')
	<p><a href="./users">Back to the main page</a></p>
	<p><a href="./about">About</a></p>
	<h2>All Users</h2>
	<p><a href="{{url('users/create')}}" class="btn btn-primary pull-right">Add a new user</a></p>
@stop