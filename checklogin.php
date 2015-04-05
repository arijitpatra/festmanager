<?php

session_start();

if(isset($_POST['login']))
{

	$uid = $_POST['uid'];
	$pw = $_POST['pw'];

	if($uid == 'regdesk' and $pw == 'im@desk321')
	{	

		$_SESSION['sid']=session_id();
		header("location:menu.php");
	}
	else
	{
		header("location:login.php");
	}

}
else
{
	header("location:login.php");
}
?>
