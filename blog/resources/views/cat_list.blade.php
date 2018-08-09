@extends('layouts.main')

@section('content')
	<h1>Category list</h1>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
		@foreach($cats as $cat)
			<tr>
				<td>{{$cat->id}}</td>
				<td>{{$cat->name}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	<div class="clearfix"></div>
	{{$cats->links()}}
@stop()