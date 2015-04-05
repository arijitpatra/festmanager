<!DOCTYPE html>
<head>
<style type="text/css">
#tariff,#tariff th,#tariff td{
	border:1px solid black;
border-collapse:collapse;
}
</style>
</head>

<body style="min-width:1000px">




<div style="display:inline-block;margin-left:50px">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="off">
<table>
	<tr><th>Team Registration</th></tr>
	<tr><td></td> <td></td></tr>
	<tr><td>Event Name:</td> <td><select name="events">
  <option value="byg">Bridge Your Gap</option>
  <option value="roe">Robo Exploder</option>
  <option value="rbx">RoBoxing</option>
  <option value="rbl">RoBall</option>
  <option value="ccl">Code Clash</option>
  <option value="jyd">Junkyard</option>
  <option value="mtk">Momentika</option>
  <option value="fpt">Face Painting</option>
  <option value="quz">Quiz</option>
  <option value="ctx">Circuitrix</option>
  <option value="cts">CS</option>
  <option value="ffa">FIFA</option>
  <option value="nfs">NFS</option>
  </select></td></tr>
	<tr><td>Team Name:</td> <td><input name="team" type="text" required="true"> <span style="font-size:11px">*Team Name=Player Name if single member</span></td></tr>
	<tr><td>Player 1:</td> <td> <input name="p1" type="text" required="true"></td></tr>
	<tr><td>Player 2:</td> <td> <input name="p2"type="text"></td></tr>
	<tr><td>Player 3:</td> <td> <input name="p3" type="text"></td></tr>
	<tr><td>Player 4:</td> <td> <input name="p4" type="text"></td></tr>
	<tr><td>Player 5:</td> <td> <input name="p5" type="text"></td></tr>
	<tr><td></td> <td></td></tr>
	<tr><td></td> <td></td></tr>
	<tr><td></td> <td></td></tr>
	<tr><td><input type="submit" name="regteam" value="Register Team"></td> <td><input type="reset" value="Clear" style="float:right"></td></tr>
</table>
</form>
</div>

<div style="display: inline-block;margin-left: 50px;top: 33px;position: relative;font-family: segoe UI light">
<!-- <table id="tariff">
	<tr><th>Code Name</th><th>Event</th><th>Max Players<th>Fee Others</th><th>Fee NITMAS</th></tr>
	<tr style="color:red"><td>BYG</td><td>Bridge Your Gap</td><td>4</td><td>300</td><td>150</td></tr>
	<tr style="color:gren"><td>FFA</td><td>FIFA</td><td>1</td><td>100</td><td>50</td></tr>
	<tr style="color:blue"><td>NFS</td><td>Need For Speed</td><td>1</td><td>100</td><td>50</td></tr>
	<tr style="color:brown"><td>CTS</td><td>Counter Strike</td><td>5</td><td>500</td><td>250</td></tr>
	<tr style="color:orange"><td>JYD</td><td>Junkyard</td><td>2</td><td>50</td><td>50</td></tr>
	<tr style="color:red"><td>FPT</td><td>Face Painting</td><td>2</td><td>50</td><td>50</td></tr>
	<tr style="color:red"><td>CTX</td><td>Circuitrix</td><td>2</td><td>50</td><td>50</td></tr>
	<tr style="color:red"><td>CCL</td><td>Code Clash</td><td>3</td><td>50</td><td>50</td></tr>
	<tr style="color:red"><td>QUZ</td><td>Quiz</td><td>2</td><td>50</td><td>50</td></tr>
	<tr style="color:yellow"><td>MTK</td><td>Momentika</td><td>1</td><td>0</td><td>0</td></tr>
	<tr style="color:teal"><td>RBX</td><td>RoBoxing</td><td>4</td><td>1st 300<br>2nd 200<br>3rd 100</td><td>150/100/50</td></tr>
	<tr style="color:purple"><td>ROE</td><td>Robo Exploder</td><td>4</td><td>1st 300<br>2nd 200<br>3rd 100</td><td>150/100/50</td></tr>
	<tr style="color:"><td>RBL</td><td>RoBall</td><td>4</td><td>1st 300<br>2nd 200<br>3rd 100</td><td>150/100/50</td></tr>

</table> -->
<img src="regfeeall.png" width="600px">
</div>

<div>
<?php
if($flag){
	while($row = mysqli_fetch_array($result))
	{
echo '<table style="border:1px solid black;border-collapse:collapse;"><tr><th style="border:1px solid black;border-collapse:collapse;">ID</th><th style="border:1px solid black;border-collapse:collapse;">Event</th><th style="border:1px solid black;border-collapse:collapse;">Team</th><th style="border:1px solid black;border-collapse:collapse;">P1</th><th style="border:1px solid black;border-collapse:collapse;">P2</th><th style="border:1px solid black;border-collapse:collapse;">P3</th><th style="border:1px solid black;border-collapse:collapse;">P4</th><th style="border:1px solid black;border-collapse:collapse;">P5</th></tr><tr><td style="border:1px solid black;border-collapse:collapse;">T'.$row['ID'].'</td><td style="border:1px solid black;border-collapse:collapse;">'.$row['Event'].'</td><td style="border:1px solid black;border-collapse:collapse;">'.$row['Team'].'</td><td style="border:1px solid black;border-collapse:collapse;">'.$row['P1'].'</td><td style="border:1px solid black;border-collapse:collapse;">'.$row['P2'].'</td><td style="border:1px solid black;border-collapse:collapse;">'.$row['P3'].'</td><td style="border:1px solid black;border-collapse:collapse;">'.$row['P4'].'</td><td style="border:1px solid black;border-collapse:collapse;">'.$row['P5'].'</td></tr>';
}
}
?>
</div>



<?php
$servername = "localhost";
	$username = "root";
    //$password = "password";
	$dbname = "sankalp15";




	$conn = mysqli_connect($servername, $username, "", $dbname);

	// $servername = "mysql.hostinger.in";
	// $username = "u333111651_snklp";
	// $password = "sankalp2015";
	// $dbname = "u333111651_snklp";




	// $conn = mysqli_connect($servername, $username, $password, $dbname);


	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}


	if (isset($_POST['regteam'])) {
		
	$flag=False;

	$events=$_POST['events'];
	$team=$_POST['team'];
	$p1=$_POST['p1'];
	$p2=$_POST['p2'];
	$p3=$_POST['p3'];
	$p4=$_POST['p4'];
	$p5=$_POST['p5'];

	$sql="INSERT INTO team (Event, Team, P1, P2, P3, P4, P5) VALUES ('$events', '$team', '$p1', '$p2', '$p3', '$p4', '$p5')"; 


	mysqli_query($conn, $sql);	

	$lastreg=mysqli_insert_id($conn);

	$result=mysqli_query($conn,"SELECT * FROM team WHERE id LIKE'$lastreg'");

	$flag=True;

	// while($row = mysqli_fetch_array($result))
	// {
		
		// echo $row['Team'];
	// }

}
	
	mysqli_close($conn);
?>

</body>
</html>