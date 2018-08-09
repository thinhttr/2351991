@extends('layouts.main')

@section('content')

<div class="jumbotron">
			<div class="container">
				<h1>Hello, {{ $name }} </h1>
				<h1>Age, {{ $age }} </h1>
				<p>Contents ...</p>
				<p>
					<a class="btn btn-primary btn-lg">Learn more</a>
				</p>
			</div>
		</div>


@stop()