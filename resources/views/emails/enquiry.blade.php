<!DOCTYPE html>
<html>
<head>
	<title>Enquiry Email</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<table>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Hello Admin!</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Customer Enquiry Details are as below :</td></tr>
			<tr><td>&nbsp;</td></tr>
		</table>
	</div>
	<div class="container">
		<table class="table table-striped">
		  <tbody>
		    <tr>
		      <th scope="row">Name -</th>
		      <td>{{ $name }}</td>
		    </tr>
		    <tr>
		      <th scope="row">Email -</th>
		      <td>{{ $email }}</td>
		    </tr>
		    <tr>
		      <th scope="row">Phone No. -</th>
		      <td>{{ $mobile }}</td>
		    </tr>
		    <tr>
		      <th scope="row">Subject -</th>
		      <td>{{ $subject }}</td>
		    </tr>
		    <tr>
		      <th scope="row">Message -</th>
		      <td>{{ $comment }}</td>
		    </tr>
		  </tbody>
		</table>
	</div>
</body>
</html>