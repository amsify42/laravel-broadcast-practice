<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Broadcast Close</title>
	<script src="{{asset('js/app.js')}}"></script>
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
	<div>
		<h1>Laravel Broadcast Close</h1>
	</div>
	<script>
		window.Echo.channel(`orders.1`).stopListening('OrderShipmentStatusUpdated');
	</script>
</body>
</html>