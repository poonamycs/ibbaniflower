<!DOCTYPE html>
<html>
<head>
	<title>Order Status Email</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<table>
		<tr><td><img src="http://veggimart.ycsweb.in/images/frontend_images/veggimart.png"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Hello {{ $name }}! ({{ $email }})</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Order ID: #{{ $order_id }}</td></tr>
		<tr><td><b style="color: blue;">{{ $order_status }}</b> : Your Order from Ibbani Flower </td></tr>
		<tr><td>Click on the link to check Order Status &nbsp;&nbsp;<a href="{{ url('/orders') }}"><button class="btn btn-primary">Check Status</button></a></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Regards,<br> <b>Ibbani Flower</b><br> <b>Phone: </b>(+91) 9898989898<br> <b>Email :</b> example@gmail.com</td></tr>
		<tr><td>&nbsp;</td></tr>
	</table>
</body>
</html>