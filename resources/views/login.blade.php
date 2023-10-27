<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Login</title>
</head>
<body>
	<h1>Laravel Login</h1>
	<form action="" method="POST">
		<input type="text" name="name" placeholder="Name" required/>	
		<input type="email" name="email" placeholder="Email" required/>
		{{ csrf_field() }}
		<input type="submit">
	</form>
</body>
</html>