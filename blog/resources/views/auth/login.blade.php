@extends('layouts.main')


@section('content')

<form action="" method="POST" role="form">
	<div class="row">
		<div class="col-md-4">
			<legend>Form title</legend>

				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" name="email" placeholder="Enter email...">
				</div>

				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter password...">
				</div>
				
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>

@stop()
