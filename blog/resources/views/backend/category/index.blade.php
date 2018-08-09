@extends('layouts.backend')
@section('title','Category list')
@section('main')
<form method="POST" action="{{route('cat-delall')}}">
	<a href="{{route('cat-add')}}" class="btn btn-primary">Add new</a>
	<input type="submit" class="btn btn-danger" value="Delete all" onclick="return confirm('Are you sure ?')">
<table class="table table-hover">
	<thead>
		<tr>
			<th><input type="checkbox" id="checked_all" value=""></th>
			<th>STT</th>
			<th>Name</th>
			<th>Status</th>
			<th>Created at</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach($datas as $k => $cat)
		<tr>
			<td><input type="checkbox" class="item-check" name="id[]" value="{{$cat->id}}"></td>
			<td>{{$k+1}}</td>
			<td>{{$cat->name}}</td>
			<td>{{$cat->status}}</td>
			<td>{{$cat->created_at}}</td>
			<td>
				<a href="{{route('cat-edit',['id'=>$cat->id])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
				<a href="{{route('cat-delete',['id'=>$cat->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure ? {{$cat->name}}')"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
{{csrf_field()}}
</form>
<div class="clearfix"></div>
{{$datas->links()}}
@stop()
