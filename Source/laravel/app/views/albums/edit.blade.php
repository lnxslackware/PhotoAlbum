@extends('master')


@section('content')
<div class="col-md-4"> 
    {{Form::open(array('url' => 'albums/'.$album->id.'/edit', 'method' => 'put', 'role' => 'form'))}}
    <div class="form-group">
        {{ Form::label('name', 'Album Name:', array('class'=>'control-label')) }}
        {{Form::text('name', $value = $album->name, array('id'=> 'name','class' => 'form-control'))}}
    </div>
        {{ Form::submit('Edit album', array('class' => 'btn btn-primary')) }}
    {{Form::close()}}
</div>
@stop