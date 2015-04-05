<!DOCTYPE html>
<head>
<title>Sankalp '15 | New Registration</title>
<style type="text/css">
	body,select,input
	{
		font-family: 'segoe ui light';
	}
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

<body style="min-width:1000px">

<div style="text-align:center">
<a class="menu" href="#">New Registration</a> 
<a class="menu" href="#" onclick="alert('You are not logged in. Login with the security credentials.')">Team Registration</a>
<a class="menu" href="#" onclick="alert('You are not logged in. Login with the security credentials.')">Check Participants</a>
<a class="menu" href="#" onclick="alert('You are not logged in. Login with the security credentials.')">Search</a>
<a class="menu" href="login.php">Login</a>
</div>

<hr>


<?php
	
	
$servername = "localhost";
	// $username = "snklp";
 //    $password = "nitmas2015";
	$username = "root";
    // $password = "";
	$dbname = "sankalp2015";




	$conn = mysqli_connect($servername, $username, "" , $dbname);
	// $servername = "mysql.hostinger.in";
	// $username = "u333111651_snklp";
	// $password = "sankalp2015";
	// $dbname = "u333111651_snklp";




	// $conn = mysqli_connect($servername, $username, $password, $dbname);


	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$issearch=false;

	if (isset($_POST['newregister'])) {

	$name=mysqli_real_escape_string($conn, $_POST['nme']);
	$institute=mysqli_real_escape_string($conn, $_POST['clg']);
	$mobile=mysqli_real_escape_string($conn, $_POST['cnt']);
	$email=mysqli_real_escape_string($conn, $_POST['eml']);
	$hometown=mysqli_real_escape_string($conn, $_POST['htw']);
	
	$bridge="N";
	$explo="N";
	$box="N";
	$rob="N";
	$algo="N";
	$mom="N";
	$junk="N";
	$quiz="N";
	$nfs="N";
	$fifa="N";
	$cs="N";
	$ckt="N";
	$face="N";

	if(isset($_POST['byg'])){
		$bridge=mysqli_real_escape_string($conn, $_POST['byg']);
	}
	if(isset($_POST['roe'])){
		$explo=mysqli_real_escape_string($conn, $_POST['roe']);
	}
	if(isset($_POST['rbx'])){
		$box=mysqli_real_escape_string($conn, $_POST['rbx']);
	}
	if(isset($_POST['rbl'])){
		$rob=mysqli_real_escape_string($conn, $_POST['rbl']);
	}
	if(isset($_POST['agk'])){
		$algo=mysqli_real_escape_string($conn, $_POST['agk']);
	}
	if(isset($_POST['mtk'])){
		$mom=mysqli_real_escape_string($conn, $_POST['mtk']);
	}
	if(isset($_POST['jyd'])){
		$junk=mysqli_real_escape_string($conn, $_POST['jyd']);
	}
	if(isset($_POST['quz'])){
		$quiz=mysqli_real_escape_string($conn, $_POST['quz']);
	}
	if(isset($_POST['nfs'])){
		$nfs=mysqli_real_escape_string($conn, $_POST['nfs']);
	}
	if(isset($_POST['ffa'])){
		$fifa=mysqli_real_escape_string($conn, $_POST['ffa']);
	}
	if(isset($_POST['cts'])){
		$cs=mysqli_real_escape_string($conn, $_POST['cts']);
	}
	if(isset($_POST['ctx'])){
		$ckt=mysqli_real_escape_string($conn, $_POST['ctx']);
	}
	if(isset($_POST['fpt'])){
		$face=mysqli_real_escape_string($conn, $_POST['fpt']);
	}



	$flag=FALSE;
	$msg=NULL;

	if(!preg_match("/^[A-Za-z. ]*$/",$name))
	{
		$flag=FALSE;
		$msg="We didn't find your name valid! Try Again.";
	}
	else if(!preg_match("/^[A-Za-z.& ]*$/",$institute))
	{
		$flag=FALSE;
		$msg="We didn't find your institute valid! Try Again.";
	}
	else if(!preg_match("/^0?\d{10}$/",$mobile))
	{
		$flag=FALSE;
		$msg="We didn't find your mobile number valid! Try Again.";
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$flag=FALSE;
		$msg="We didn't find your email valid! Try Again.";
	}
	else if(!preg_match("/^[A-Za-z. ]*$/",$hometown))
	{
		$flag=FALSE;
		$msg="We didn't find your hometown valid! Try Again.";
	}
	else
	{
		$flag=TRUE;
	}


	if($flag)
	{
				
		$sql = "INSERT INTO reg (Name, Institute, Mobile, Email, Hometown, Bridge_Your_Gap, Robo_Exploder, RoBoxing, RoBall, Code_Clash, Momentika, Face_Painting, Junkyard, Quiz, Circuitrix, NFS, FIFA, CS) VALUES ('$name','$institute','$mobile','$email','$hometown','$bridge','$explo','$box','$rob','$algo','$mom','$face','$junk','$quiz','$ckt','$nfs','$fifa','$cs')";

		$r = mysqli_query($conn, $sql);

		if($r) echo '<p style="text-align:center;color:green">Registration ID: SNKLP0'. mysqli_insert_id($conn).'</p>';
		else echo mysqli_error($conn);

	}
	else
	{
		echo '<p style="text-align:center;color:red">Something is wrong! Enter valid input.</p>';
	}
	}

		
	   
	mysqli_close($conn);
?>


<div style="margin: 2em auto; width:400px">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="off">
<b>New Registration</b><br><br>
<table>
	<tr><td></td> <td></td></tr>
	<tr><td>Name:</td> <td><input type="text" name="nme" required="true"></td></tr>
	<tr><td>Institute:</td> <td> <input type="text" name="clg" required="true"></td></tr>
	<tr><td>Mobile:</td> <td> <input type="text" name="cnt" id="mobile" required="true" placeholder="10 digit number" maxlength="10"></td></tr>
	<tr><td>Email:</td> <td> <input type="email" name="eml" required="true"></td></tr>
	<!-- <tr><td>Hometown:</td> <td> <input type="text" name="htw" required="true"></td></tr> -->
	<input type="hidden" name="htw" value="NA">
	<tr><td></td> <td></td></tr>
	<tr><td></td> <td></td></tr>
	<tr><td></td> <td></td></tr>
	<tr><td>Events:</td></tr>
				<tr><td><input type="checkbox" name="byg" value="Y">Bridge Your Gap</td><td></td>
				<td><input type="checkbox" name="roe" value="Y">Robo Exploder</td></tr>
				<tr><td><input type="checkbox" name="rbx" value="Y">RoBoxing</td><td></td>
				<!--<p><input type="checkbox" name="fyw" value="Robotics">  -->
				<td><input type="checkbox" name="rbl" value="Y">RoBall</td></tr>
			

			
				<tr><td><input type="checkbox" name="agk" value="Y">Code Clash</td><td></td>
				<!--<td><input type="checkbox" name="mtk" value="Y">Momentika</td>-->
				<td><input type="checkbox" name="fpt" value="Y">Face Painting</td></tr>
							<!--<p><input type="checkbox" name="gck" value="Robotics">  
							<p><input type="checkbox" name="fbl" value="Robotics">  -->
				<tr><td><input type="checkbox" name="jyd" value="Y">Junkyard</td><td></td>
				<td><input type="checkbox" name="quz" value="Y">Quiz</td></tr>

						
							
				<tr><td><input type="checkbox" name="ctx" value="Y">Circuitrix</td><td></td>
				<td><input type="checkbox" name="nfs" value="Y">NFS</td></tr>
				<tr><td><input type="checkbox" name="ffa" value="Y">FIFA</td><td></td>
				<td><input type="checkbox" name="cts" value="Y">CS</td></tr>


				<tr><td></td> <td></td></tr>
				<tr><td></td> <td></td></tr>
				<tr><td></td> <td></td></tr>
				
						
				<tr><td><input type="submit" name="newregister" value="Register"></td> <td></td><td><input type="reset" value="Clear" style="float:right"></td></tr>
</table>
</form>
</div>


</body>


</html>