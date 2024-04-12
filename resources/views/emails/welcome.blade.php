<html>
	<head>
		<title>Welcome Email</title>
	</head>
	<body>
		<table>
			<tr><td><img src="http://veggimart.ycsweb.in/images/frontend_images/veggimart.png"></td></tr>
			<tr><td>Hello {{ $name }}!</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Your account has been successfully activated.</td></tr>
			<tr><td>&nbsp;</td></tr>	
			<tr><td>Your account information is as below:</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Email: {{ $email }}</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Password: ***** (as chosen by you)</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Regards,<br> <b>Ibbani Flower</b><br> <b>Phone: </b>(+91) 9898989898<br> <b>Email :</b> example@gmail.com</td></tr>
			<tr><td>&nbsp;</td></tr>
	</body>
</html>