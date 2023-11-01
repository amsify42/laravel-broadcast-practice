<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ChatRoom Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top:20px;">
		<div class="row justify-content-md-center">
			<div class="col col-lg-4">
				<h1>ChatRoom Login</h1>
				<form action="" method="POST">
				  <!-- Email input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1">Email address</label>
				    <input type="email" placeholder="Email Address" name="email" class="form-control" required/>
				  </div>

				  <!-- Password input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example2">Name</label>
				    <input type="text" placeholder="Name" name="name" class="form-control" required/>
				  </div>

				  {{ csrf_field() }}

				  <!-- Submit button -->
				  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
				</form>			
			</div>
		</div>	
	</div>
</body>
</html>