	<?php include'../connect.php';
	
	
	$FName = $_POST['Field1'];
	$LName = $_POST['Field2'];
	$age = $_POST['Field5'];
	$average = $_POST['Field7'];
	$clubName = $_POST['Field6'];
	$active = $_POST['actBox'];
	$date = date('Y-m-d');
	
	
     // Create query to insert data to the table
     
     
	    $query = "INSERT INTO tblone
	     	(fName, lName, age, average, clubName, active, dateUpdated)
	     	Values ('$FName', '$LName', '$age', '$average', '$clubName', '$active', '$date')";

        if (mysqli_query($conn, $query))
	   {
	   		print "RECORD SUCCESSFULLY ADDED!!";
	   }
	   else
	   {
	   		print "ERORR UPDATED RECORD: DATA NOT ADDED";
	   }
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body><br><br>
		Go back to <a href="../../index.php">Home</a>
		<br><br>
		<h1>Add Data:</h1><br>
		<font size="5"><strong>Date: <?php echo $date; ?></strong></font>
		<table style="border: solid; border-color: red;">
			<tr>
				<td width="120"><strong>First Name:</strong></td>
				<td width="70"><?php echo $FName; ?></td>
				<td width="50"></td>
				<td width="120"><strong>Last Name:</strong></td>
				<td width="70"><?php echo $LName; ?></td>
			</tr>
			
			<tr>
				<td width="120"><strong>Age:</strong></td>
				<td width="70"><?php echo $age; ?></td>
				<td width="50"></td>
				<td width="120"><strong>Average:</strong></td>
				<td width="70"><?php echo $average; ?></td>
			</tr>
			
			<tr>
				<td width="120"><strong>Club Name:</strong></td>
				<td width="70"><?php $clubName ?></td>
				<td width="50"></td>
				<td width="120"><strong>Active:</strong></td>
				<td width="70">
					<?php
					
						if ($active == TRUE){
						echo "Active";
					}else{
						echo "Non-Active";
					}
					
		
					?>
					
					
					
				</td>
			</tr>
			
			
			
			
		</table>
		
		
		
	</body>
</html>

