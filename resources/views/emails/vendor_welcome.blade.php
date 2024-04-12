<html>
	<head>
		<title>Welcome {{ $vname }}</title>
	</head>
	<body>
		<table>
			<tr><td><img src="http://veggimart.ycsweb.in/images/frontend_images/veggimart.png"></td></tr>
			<tr><td>Hello {{ $vname }}!</td></tr>
			<tr><td>&nbsp;</td></tr>			
			<tr><td><b>You can login after the admin approves your request for vendorship.</b></td></tr>
			<tr><td>&nbsp;</td></tr>	
			<tr><td>Your email has confirmed successfully.</td></tr>
			<tr><td>&nbsp;</td></tr>	
			<tr><td>Your account information is as below:</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Email: {{ $email }}</td></tr>
			<tr><td>Password: ***** (as chosen by you)</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Regards,<br> <b>Ibbani Flower</b><br> <b>Phone: </b>(+91) 9898989898<br> <b>Email :</b> example@gmail.com</td></tr>
			<tr><td>&nbsp;</td></tr>
		</table>
	</body>
</html>