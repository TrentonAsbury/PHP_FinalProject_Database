	<?php include'../connect.php'; ?>
	

<?php 
	
	$userID = $_GET['id'];
	
	
?>

<?php
     // Create query to insert data to the table
     
     
	    $query="DELETE from tblone WHERE userID='$userID'";
			
			if (mysqli_query($conn, $query)){
				echo "RECORD SUCCESSFULLY DELETED!!";
			}else{
				echo "ERORR DELETING RECORD: " . mysqli_error($conn);
			}
			
			
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body><br><br><br>
		Go back to <a href="../../index.php">Home</a>
	</body>
</html>

