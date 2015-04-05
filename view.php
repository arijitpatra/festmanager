<?php
include 'menu.php'
?>

<?php
	
	$servername = "localhost";
	// $username = "snklp";
 //    $password = "nitmas2015";
	$username = "root";
    // $password = "";
	$dbname = "sankalp2015";




	$conn = mysqli_connect($servername, $username, "" , $dbname);

	$flag = False;

	$eve='byg';

	if(isset($_POST['cp']))
	{	$_SESSION['events'] = $eve = $_POST['events'];
		$td="SELECT * FROM team WHERE Event='".$_SESSION['events']."'";

		$resulttd=mysqli_query($conn, $td);

		if(mysqli_num_rows($resulttd) > 0)
		{
			$flag = True;
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
	<title>Sankalp '15 | Check Eventwise Participants</title>
	<style type="text/css">
	body,select,input
	{
		font-family: 'segoe ui light';
	}
	</style>
		<title>Team Viewer</title>
		<script type="text/JavaScript">
			function AutoRefresh( t ) 
			{
				setTimeout("location.reload(true);", t);
			}
		</script>
	</head>
	<body onload="JavaScript:AutoRefresh(300000)" style="min-width:1000px">
		<div style="margin: 2em auto; width:400px">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<select style="height:35px;width:250px" name="events">
			  <option value="byg" <?php if ($eve=="byg") echo 'selected'; ?>>Bridge Your Gap</option>
			  <option value="roe" <?php if ($eve=="roe") echo 'selected'; ?>>Robo Exploder</option>
			  <option value="rbx" <?php if ($eve=="rbx") echo 'selected'; ?>>RoBoxing</option>
			  <option value="rbl" <?php if ($eve=="rbl") echo 'selected'; ?>>RoBall</option>
			  <option value="jyd" <?php if ($eve=="jyd") echo 'selected'; ?>>Junkyard</option>
			  <!--<option value="mtk" <?php //if ($eve=="mtk") echo 'selected'; ?>>Momentika</option>-->
			  <option value="ccl" <?php if ($eve=="ccl") echo 'selected'; ?>>Code Clash</option>
			  <option value="fpt" <?php if ($eve=="fpt") echo 'selected'; ?>>Face Painting</option>
			  <option value="quz" <?php if ($eve=="quz") echo 'selected'; ?>>Quiz</option>
			  <option value="ctx" <?php if ($eve=="ctx") echo 'selected'; ?>>Circuitrix</option>
			  <option value="cts" <?php if ($eve=="cts") echo 'selected'; ?>>CS</option>
			  <option value="ffa" <?php if ($eve=="ffa") echo 'selected'; ?>>FIFA</option>
			  <option value="nfs" <?php if ($eve=="nfs") echo 'selected'; ?>>NFS</option>
			</select>
		<input type="submit" name="cp" style="height:35px" value="Check Participants">
		</form>
		</div>

		<?php
			if($flag){
				?>
				<div style="margin-top: 30px;">
					<h1>TOTAL PARTICIPANTS / TEAMS: <?php echo mysqli_num_rows($resulttd);?></h1>
				</div>
				<?php
				while($rowtd=mysqli_fetch_assoc($resulttd))
				{
					?>
					<div style="margin-top: 30px;">
						<h2><?php echo 'Team ID: T'.$rowtd['ID'].' | Team Name: <span style="color:blue">'.$rowtd['Team'].'</span>';?></h2>
						<?php 
							$memberCount = 1;

							if(!empty($rowtd['P1']))
							{
								$tdwhile="SELECT * FROM reg WHERE ID='".$rowtd['P1']."'";
								$resulttdwhile=mysqli_query($conn, $tdwhile);
								if($rowresulttdwhile=mysqli_fetch_assoc($resulttdwhile))
								echo "<p>Member $memberCount ID: $rowresulttdwhile[ID], Name: <span style=\"color: red\">$rowresulttdwhile[Name]</span>, Institute: $rowresulttdwhile[Institute], Contact: $rowresulttdwhile[Mobile]</p>";
								$memberCount++;
							}

							if(!empty($rowtd['P2']))
							{
								$tdwhile="SELECT * FROM reg WHERE ID='".$rowtd['P2']."'";
								$resulttdwhile=mysqli_query($conn, $tdwhile);
								if($rowresulttdwhile=mysqli_fetch_assoc($resulttdwhile))
								echo "<p>Member $memberCount ID: $rowresulttdwhile[ID], Name: <span style=\"color: red\">$rowresulttdwhile[Name]</span>, Institute: $rowresulttdwhile[Institute], Contact: $rowresulttdwhile[Mobile]</p>";
								$memberCount++;
							}

							if(!empty($rowtd['P3']))
							{
								$tdwhile="SELECT * FROM reg WHERE ID='".$rowtd['P3']."'";
								$resulttdwhile=mysqli_query($conn, $tdwhile);
								if($rowresulttdwhile=mysqli_fetch_assoc($resulttdwhile))
								echo "<p>Member $memberCount ID: $rowresulttdwhile[ID], Name: <span style=\"color: red\">$rowresulttdwhile[Name]</span>, Institute: $rowresulttdwhile[Institute], Contact: $rowresulttdwhile[Mobile]</p>";
								$memberCount++;
							}

							if(!empty($rowtd['P4']))
							{
								$tdwhile="SELECT * FROM reg WHERE ID='".$rowtd['P4']."'";
								$resulttdwhile=mysqli_query($conn, $tdwhile);
								if($rowresulttdwhile=mysqli_fetch_assoc($resulttdwhile))
								echo "<p>Member $memberCount ID: $rowresulttdwhile[ID], Name: <span style=\"color: red\">$rowresulttdwhile[Name]</span>, Institute: $rowresulttdwhile[Institute], Contact: $rowresulttdwhile[Mobile]</p>";
								$memberCount++;
							}

							if(!empty($rowtd['P5']))
							{
								$tdwhile="SELECT * FROM reg WHERE ID='".$rowtd['P5']."'";
								$resulttdwhile=mysqli_query($conn, $tdwhile);
								if($rowresulttdwhile=mysqli_fetch_assoc($resulttdwhile))
								echo "<p>Member $memberCount ID: $rowresulttdwhile[ID], Name: <span style=\"color: red\">$rowresulttdwhile[Name]</span>, Institute: $rowresulttdwhile[Institute], Contact: $rowresulttdwhile[Mobile]</p>";
								$memberCount++;
							}

						?>
						<hr>
					</div>
					<?php
				}
			}
		?>
	</body>
</html>