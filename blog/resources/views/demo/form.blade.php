<!DOCTYPE html>
<html>
<head>
	<title>Demo view</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form">
			<legend>Form title</legend>
			<div class="form-group">
				<label for="">label</label>
				<input type="text" class="form-control" name="product_id[]" placeholder="Input field">
			</div>
		
			<div class="form-group">
				<label for="">label</label>
				<input type="text" class="form-control" name="quantity[]" placeholder="Input field">
			</div>
			{{csrf_field()}}
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>