<?php

session_start();

if(!isset($_SESSION['sid']))
{
	header("location:login.php");
}

?>

<!DOCTYPE html>

<head>
<title>Sankalp '15 | Navigation</title>
<style type="text/css">
.menu
{
	display: inline-block;
	margin: 10px;
	border:1px solid #28ae7f;
	background-color: white;
	color: #28ae7f;
	cursor: pointer;
	padding: 15px 20px;
	font-family: segoe ui light;
	width: 150px;
	text-align: center;
	text-decoration: none;

}
</style>
</head>
<body style="min-width: 1000px">

<div style="text-align:center">
<a class="menu" href="newreg.php">New Registration</a> 
<a class="menu" href="teamreg.php">Team Registration</a>
<a class="menu" href="view.php">Check Participants</a>
<a class="menu" href="search.php">Search</a>
<a class="menu" href="logout.php">Logout</a>
</div>

<hr>


</body>
</html>


