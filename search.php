<?php

include 'menu.php';

?>

<!DOCTYPE html>


<head>

<title>Sankalp '15 | Search</title>
	<style type="text/css">
			body,select,input
	{
		font-family: 'segoe ui light';
	}
	</style>
</head>


<body style="min-width:1000px">

<div style="display:inline-block;margin-left:50px">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="off">
<table>
	<tr><th>Already Registered</th></tr>
	<tr><td></td> <td></td></tr>
	<tr><td>Registration ID:</td> <td><input name="rid" type="text"><span style="font-size:12px">&nbsp&nbsp&nbsp*Last 2 digits when < 100 and last 3 digits when > 100</span></td></tr>
	<tr><td>Phone:</td> <td><input name="phn" id="mobile" type="text" maxlength="10"><span style="font-size:12px">&nbsp&nbsp&nbsp*10 digit</span></td></tr>
	<tr><td>Email ID:</td> <td><input name="eml" type="text"></td></tr>
	<tr><td></td> <td></td></tr>
	<tr><td></td> <td></td></tr>
	<tr><td></td> <td></td></tr>
	<tr><td><input name="search" type="submit" value="Search"></td> <td><input type="reset" value="Clear" style="float:right"></td></tr>
</table>
</form>
</div>

<?php


	$servername = "localhost";
	// $username = "snklp";
 //    $password = "nitmas2015";
	$username = "root";
    // $password = "";
	$dbname = "sankalp2015";




	$conn = mysqli_connect($servername, $username, "" , $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	if(isset($_POST['search']))
	{

	$id=mysqli_real_escape_string($conn, $_POST['rid']);
	$phone=mysqli_real_escape_string($conn, $_POST['phn']);
	$email=mysqli_real_escape_string($conn, $_POST['eml']);
	if(empty($email)) $email =  "SOMETHING THAT CANNOT EVER HAPPEN";

	$sql="SELECT * FROM reg WHERE ID='$id' OR Mobile='$phone' OR Email LIKE '%$email%'";
	$eventlist="SELECT Events FROM reg WHERE VALUES LIKE 'Y'";

	// echo "$sql";

	$result = $conn->query($sql);
	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br><br><br>ID: SNKLP0". $row["ID"]. "<br>Name: " . $row["Name"]. "<br>Institute: " . $row["Institute"]."<br>Contact: " . $row["Mobile"]."<br>Email: " . $row["Email"]."<br>Hometown: " . $row["Hometown"]. "<br>";
    }
} else {
    echo "0 results";
}

}

$conn->close();

?>

</body>


</html>