<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Broadcast</title>
	<script src="{{asset('js/app.js')}}"></script>
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
	<div>
		<h1>Laravel Broadcast</h1>
		<div id="status"></div>
	</div>
	<script>
		window.Echo.channel(`orders.1`)
		.listen('OrderShipmentStatusUpdated', (e) => {
			console.log(e.order);
		    document.getElementById('status').innerText = e.order.status;
		});
	</script>
</body>
</html>