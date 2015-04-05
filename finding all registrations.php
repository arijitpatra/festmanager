<!DOCTYPE html>
<head>
	<title>
		
	</title>
	<style type="text/css">
		table,tr,td,th
		{
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;
			font-family: segoe ui light;
			padding: 15px;
		}
	</style>
</head>

<body>
	<table>
		<tr><th>Team</th><th>Members</th><th>Institute</th><th>Event</th><th>Price</th></tr>
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

$sql = "SELECT * FROM team";

$result=mysqli_query($conn, $sql);




while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>$row[2]</td>"; //team name
		
		$p1=$p2=$p3=$p4=$p5='';
		$p1ins=$p2ins=$p3ins=$p4ins=$p5ins='';

		if($row[3]) //player 1 id
		{
			$sql2 = "SELECT Name,Institute,Mobile FROM reg WHERE ID=$row[3]";
			$r2=mysqli_query($conn,$sql2);
			$row2 = mysqli_fetch_array($r2);
			$p1=$row2[0];
			$p1ins=$row2[1];
			

		}
		if($row[4])
		{
			$sql2 = "SELECT Name,Institute,Mobile FROM reg WHERE ID=$row[4]";
			$r2=mysqli_query($conn,$sql2);
			$row2 = mysqli_fetch_array($r2);
			$p2=$row2[0];
			$p2ins=$row2[1];

		}
		if($row[5])
		{
			$sql2 = "SELECT Name,Institute,Mobile FROM reg WHERE ID=$row[5]";
			$r2=mysqli_query($conn,$sql2);
			$row2 = mysqli_fetch_array($r2);
			$p3=$row2[0];
			$p3ins=$row2[1];

		}
		if($row[6])
		{
			$sql2 = "SELECT Name,Institute,Mobile FROM reg WHERE ID=$row[6]";
			$r2=mysqli_query($conn,$sql2);
			$row2 = mysqli_fetch_array($r2);
			$p4=$row2[0];
			$p4ins=$row2[1];

		}
		if($row[7])
		{
			$sql2 = "SELECT Name,Institute,Mobile FROM reg WHERE ID=$row[7]";
			$r2=mysqli_query($conn,$sql2);
			$row2 = mysqli_fetch_array($r2);
			$p5=$row2[0];
			$p5ins=$row2[1];

		}

		echo "<td>$p1<br>$p2<br>$p3<br>$p4<br>$p5</td>";
		echo "<td>$p1ins<br>$p2ins<br>$p3ins<br>$p4ins<br>$p5ins</td>";
		if($row[1]=='ffa')
		{
		echo "<td>FIFA</td>";
		}
		if($row[1]=='roe')
		{
		echo "<td>Robo Exploder</td>";
		}
		if($row[1]=='rbx')
		{
		echo "<td>RoBoxing</td>";
		}
		if($row[1]=='byg')
		{
		echo "<td>Bridge Your Gap</td>";
		}
		if($row[1]=='jyd')
		{
		echo "<td>JunkYard</td>";
		}
		if($row[1]=='mtk')
		{
		echo "<td>momentika</td>";
		}
		if($row[1]=='quz')
		{
		echo "<td>Quiz</td>";
		}
		if($row[1]=='fpt')
		{
		echo "<td>Face Painting</td>";
		}
		if($row[1]=='ccl')
		{
		echo "<td>Code Clash</td>";
		}
		if($row[1]=='ctx')
		{
		echo "<td>Circuitrix</td>";
		}
		if($row[1]=='cts')
		{
		echo "<td>Counter Strike</td>";
		}
		if($row[1]=='nfs')
		{
		echo "<td>Need For Speed</td>";
		}
		if($row[1]=='rbl')
		{
		echo "<td>RoBall</td>";
		}



		echo "<td></td>";





	}

mysqli_close($conn);
?>
	</table>
</body>
</html>
