	<?php include'../connect.php'; ?>
	

<?php 
	$FName = $_POST['fName'];
	$LName = $_POST['lName'];
	$age = $_POST['age'];
	$average = $_POST['average'];
	$clubName = $_POST['clubName'];
	$active = $_POST['actBox'];
	$date = date('Y-m-d');
	$userID = $_POST['userID'];
	
	
	$FName_old = $_POST['fName_old'];
	$LName_old = $_POST['lName_old'];
	$age_old = $_POST['age_old'];
	$average_old = $_POST['average_old'];
	$clubName_old = $_POST['clubName_old'];
	$active_old = $_POST['active_old'];
	$date_old = $_POST['dateUpdated_old'];

?>

<?php
     // Create query to insert data to the table
     
     
	    $query="UPDATE tblone set userID='$userID', fName='$FName', lName='$LName', age='$age', average='$average', clubName='$clubName', active='$active', dateUpdated='$date' where userID='$userID' ";
			
			
			if (mysqli_query($conn, $query)){
				echo "RECORD SUCCESSFULLY UPDATED!!";
			}else{
				echo "ERORR UPDATED RECORD: " . mysqli_error($conn);
			}
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body><br><br>
		Go back to <a href="../../index.php">Home</a>
	
	
	<br><br>
		<h1>Edited Data:</h1><br>
		<font size="5"><strong>Date: <?php echo $date; ?></strong></font>
		<table style="border: solid; border-color: red;">
			<tr>
				<th width="150">Field</th>
				<th width="150">Old Data</th>
				<th width="150">New Data</th>
			<tr>
				<th align="center">First Name</th>
				<td align="center"><?php echo $FName_old; ?></td>
				<td align="center"><?php echo $FName; ?></td>
			</tr>
			<tr>
				<th align="center">Last Name</th>
				<td align="center"><?php echo $LName_old; ?></td>
				<td align="center"><?php echo $LName; ?></td>
			</tr>
			<tr>
				<th align="center">Age</th>
				<td align="center"><?php echo $age_old; ?></td>
				<td align="center"><?php echo $age; ?></td>
			</tr>
			<tr>
				<th align="center">average</th>
				<td align="center"><?php echo $average_old; ?></td>
				<td align="center"><?php echo $average; ?></td>
			</tr>
			
			<tr>
				<th align="center">Club Name</th>
				<td align="center"><?php echo $clubName_old; ?></td>
				<td align="center"><?php echo $clubName; ?></td>
			</tr>
			<tr>
				<th align="center">Active</th>
				<td align="center"><?php
					
						if ($active_old == 1){
						echo "Active";
					}else{
						echo "Non-Active";
					}
					
					?></td>
				<td align="center"><?php
					
						if ($active == 1){
						echo "Active";
					}else{
						echo "Non-Active";
					}
					
					?></td>
			</tr>
			<tr>
				<th align="center">Date</th>
				<td align="center"><?php echo $date_old; ?></td>
				<td align="center"><?php echo $date; ?></td>
			</tr>
			
			
			
			
			
		</table>
	
	
	</body>
</html>

