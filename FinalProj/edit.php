<?php
include 'includes/header.html';
include 'includes/connect.php';
?>

<?php $title="Player DB - View DB"?>

<!DOCTYPE HTML>
<html>
	<head> 
		<title><?php echo $title; ?></title>
		

		
	</head>

	<body>
		
		<br>
		<h3><center>EDIT PLAYERS</center></h3>
		<br>
		
			<center>
			<table>
			<?php
			
			   $query="SELECT * FROM tblone";
			   $result = mysqli_query($conn, $query);
			   echo"<tr>";
			   	 
				 
			   	 echo'<th width="50">Edit</th>' ;
			     echo'<th width="200" aligne="center">Name</th>' ;  
				 echo'<th width="75">Age</th>' ;
				 echo'<th width="75">Average</th>' ;
				 echo'<th width="150">Club Name</th>' ;  
				 echo'<th width="75">Active</th>' ;
				 echo'<th width="100">Last Updated</th>' ;
			   //echo'<th width="50">Delete</th>' ;
			   echo"</tr>";
			   
				$color = "#FFFF";
				$cnt = 2;
			   
			   while($row = mysqli_fetch_array($result))
			   {
			   	$userID = $row['userID'];
			   	$active = $row['active'];
			   	
				if ($cnt > 1){
					$color = "lightgray";
					$cnt = 0;
				}else{
					$color = "white";
					$cnt = 2;
				}
				
			   	echo '<tr bgcolor="' . $color . '">';
				
				echo '<td align="center"><a href="editForm.php?id=' . $userID . '">Edit</a></td>';
				echo '<td align="center">' . $row['lName'] . ", " . $row['fName'] . "</td>";
				echo '<td align="center">' . $row['age'] . "</td>";
				echo '<td align="center">' . $row['average'] . "</td>";
				echo '<td align="center">' . $row['clubName'] . "</td>";
				
				echo '<td align="center">';
				
				if ($active == 1){
						echo "active";
					}else{
						echo "";
					}
				echo '</td>';
				
				echo '<td align="center">' . $row['dateUpdated'] . "</td>";
				//echo '<td align="center"><a href="delete_dump.php?id=' . $userID . '">Delete</a></td>';
				echo"</tr>";
			   }
			?>
		</table>
		</center>
		
	</body>
	
	
</html>

<?php include ('includes/footer.html'); ?>

