<?php
include 'includes/header.html';
include 'includes/connect.php';
?>

<?php $title="Player DB - Home"?>

<!DOCTYPE HTML>
<html>
	<head> 
		<title><?php echo $title; ?></title>
		

		
	</head>

	<body>
		<center>
		<table border="none" width="650">
			<tr><td><br>
			<center><img src="images/activity.jpg" width="400" alt="Activities" /></center>
		<p align="center"><font size="5"><br>	
			This program will help keep track of all your players teams, stats, and wether they are active in the system.</font></p>
			</td></tr>
		</table>
		</center>
	
	</body>
	
	
</html>

<?php
	
	$table = mysqli_query($conn, "select 1 from tblone");
	
	
	if($table === FALSE) {
	  echo '<form action="includes/table.php"><input type="submit" value="Create Table" />';
	}

	
	$conn->close();
	
	
?>

<?php include ('includes/footer.html'); ?>

