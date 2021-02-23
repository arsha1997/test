<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<style>
	table,td{
		padding: 20px;
		font-size: 20px;
	}
	
	</style>
</head>
<body>
	<form style="margin-left: 450px" method="post" action="<?php echo base_url()?>main/userreg2">
		<fieldset style="width:300px;height:600px">
			<legend style="color: red"><strong>Registration</strong></legend>
		<table>
			<tr>
				<td>
		Firstname:</td>
		<td><input type="text" name="fname" required="required"></td>
	</tr>
	<tr>
		<td>
		Lastname:</td>
		<td><input type="text" name="lname" required="required"></td>
	</tr>
	<tr>
		<td>
		Username:</td>
		<td><input type="text" name="uname" required="required"></td>
	</tr>
	<tr>
		<td>
		password:</td>
		<td><input type="password" name="pass" required="required"></td>
	</tr>
	<tr>
		<td>
		Mobile:</td>
		<td><input type="text" name="mobile" required="required"></td>
	</tr>
	
		<tr><td>Email:</td>
		<td><input type="Email" name="email" required="required"></td></tr>
		<tr><td><input type="submit" name="sub" value="Register"></td></tr>
		

	</table>
</fieldset>


	</form>
</body>
</html>