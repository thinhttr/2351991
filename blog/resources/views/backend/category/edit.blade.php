@extends('layouts.backend')
@section('title','Category list')
@section('main')
<form method="POST" class="form-inline">
	<a href="{{route('category')}}" class="btn btn-primary">Back to list</a>
	<div class="form-group">
		<input class="form-control" name="name" placeholder="Input field" value="{{$model->name}}">
	</div>
	<input type="submit" class="btn btn-success" value="Save" >
	
{{csrf_field()}}
</form>
<div class="clearfix"></div>

@stop()
