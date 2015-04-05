<?php

session_start();	

if(!empty($_SESSION['sid']))
{
	header("location:menu.php");
}

?>


<html>
<head>
<title>Sankalp '15 | Registration Desk Login</title>
<style type="text/css">
	body,input,table,tr,td
	{
		font-family: 'segoe ui light';
	}
	</style>
</head>
<body style="min-width:1000px">

<img src="sankalp15.png" height="250px" style="display: block; margin: 2em auto">

<div style="margin: 2em auto;width: 230px;">
<form method="post" action="checklogin.php" autocomplete="off">
<table>
<tr><td>User Id: </td><td><input type="text" name="uid" required></td></tr>
<tr><td>Password: </td><td><input type="password" name="pw" required></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><input type="submit" name="login" value="Login"></td><td><input type="reset" value="Clear" style="float:right"></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td><td><a href="newreg.php" style="">New Registration</a></td><td></td></tr>
</form>
</div>

</body>
</html>