<?php
include 'includes/connect.php';

	$userID = $_GET['id'];

?>


<!DOCTYPE html>
<html>
	<head>

		<title> Form - Add Player </title>

		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="generator" content="Wufoo">
		<meta name="robots" content="index, follow">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<!-- CSS -->
		<link href="css/add_person/structure.css" rel="stylesheet">
		<link href="css/add_person/form.css" rel="stylesheet">
		<link href="css/add_person/theme.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link href="https://" rel="stylesheet">

		<!-- JavaScript -->
		<script src="../../scripts/wufoo.js"></script>

<script type="text/javascript">

	function validation(){
		
		var act = document.getElementById('active').checked; 
		
		if (act == 1) {
			var chk = 1;
			alert("1");
		} else {
			var chk = 0;
			alert("0");
		}
		
		document.getElementsByClassName('active2').value = chk;
		
		
	}
</script>

	</head>
	
	<?php
			
			
			$query="SELECT * FROM tblone";
			$result = mysqli_query($conn, $query);
			while($row = mysqli_fetch_array($result)){
				
				if ($userID == $row['userID']){
				$fName = $row['fName'];
				$lName = $row['lName'];
				$age = $row['age'];
				$average = $row['average'];
				$clubName = $row['clubName'];
				$actBox = $row['active'];
				$dateUpdated = $row['dateUpdated'];
				}	
			}
			echo $fName . " " . $lName . " " . $active;
			
			
		?><?php
include 'includes/header.html';
include 'includes/connect.php';

	$userID = $_GET['id'];

?>

<?php $title="Player DB - View DB"?>

<!DOCTYPE HTML>
<html>
	<head> 
		<title><?php echo $title; ?></title>
		
		<script type="text/javascript">

		function validation(){
		
		var act = document.getElementById('active').checked; 
		
		if (act == 1) {
			//var chk = 1;
			alert("1");
		} else {
			var chk = 0;
			//alert("0");
		}
		
		
		
		document.getElementsByClassName('active2').value = chk;
		alert(document.getElementsByClassName('active2').value);
		
	}
</script>



		
	</head>

	<body>
		
		<br>
		<h3><center>EDITING PLAYERS</center></h3>
		<br>		
		<?php
			
			
			$query="SELECT * FROM tblone";
			$result = mysqli_query($conn, $query);
			while($row = mysqli_fetch_array($result)){
				
				if ($userID == $row['userID']){
				$fName = $row['fName'];
				$lName = $row['lName'];
				$age = $row['age'];
				$average = $row['average'];
				$clubName = $row['clubName'];
				$active = $row['active'];
				$dateUpdated = $row['dateUpdated'];
				
				
				$fName_old = $row['fName'];
				$lName_old = $row['lName'];
				$age_old = $row['age'];
				$average_old = $row['average'];
				$clubName_old = $row['clubName'];
				$active_old = $row['active'];
				$dateUpdated_old = $row['dateUpdated'];
				
				}
			}
			
			
			echo $active_old;
			
			
		?>
		<br><br>
		
		<form name="editForm" id="editForm" action="includes/dump/edit_dump.php" method="post" onsubmit="validation()">
		
		
		
		<center>
		<table style="border: solid">
			<tr>
				<td width="80"><font color="red" size="4"><strong>Date:</strong></font></td>
				<td width="30"><input id="curDate" name="curDate" value="<?php echo date('Y-m-d'); ?>" type="text" tabindex="1"  readonly/></td>
				<td width="50"></td>
				<td width="75"><font color="red" weight="bold" size="4"><strong>ID:</strong></font></td>
				<td width="30"><input id="userID" name="userID" value="<?php echo htmlentities($userID) ?>" type="text" tabindex="2" readonly /></td>
			</tr>
			
			<tr>
				<td width="80">First Name: <font color="red"><strong>*</strong></font> </td>
				<td width="30"><input id="fName" name="fName" value="<?php echo htmlentities($fName) ?>" type="text" tabindex="1" required /></td>
				<td width="50"></td>
				<td width="75">Last Name: <font color="red"><strong>*</strong></font></td>
				<td width="30"><input id="lName" name="lName" value="<?php echo htmlentities($lName) ?>" type="text" tabindex="2" required /></td>
			</tr>
			
			<tr>
				<td width="80">Age: <font color="red"><strong>*</strong></font></td>
				<td width="30"><input id="age" name="age" value="<?php echo htmlentities($age) ?>" type="text" tabindex="3" required /></td>
				<td width="50"></td>
				<td width="75">Average: <font color="red"><strong>*</strong></font></td>
				<td width="30"><input id="average" name="average" value="<?php echo htmlentities($average) ?>" type="text" tabindex="4" required /></td>
			</tr>
			
			<tr>
				<td width="80">Club Name: <font color="red"><strong>*</strong></font></td>
				<td width="30"><input id="clubName" name="clubName" value="<?php echo htmlentities($clubName) ?>" type="text" tabindex="5" required /></td>
				<td width="50"></td>
				<td width="75">Active:</td>
				<td width="30">
					<?php
					
						if ($actBox == 1){
						echo '<input type="checkbox" name="actBox" value="1" checked>';
					}else{
						echo '<input type="checkbox" name="actBox" value="1"';
					}
					
					?>	
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" value="Submit"></td>
				<td colspan="2" align="center"><input type="reset" formnovalidate="editForm" value="Reset"></td>
			</tr>
		</table>
		</center>
		
		<input id="lName_old" name="lName_old" value="<?php echo htmlentities($lName_old) ?>" type="hidden" />
		<input id="fName_old" name="fName_old" value="<?php echo htmlentities($fName_old) ?>" type="hidden" />
		<input id="age_old" name="age_old" value="<?php echo htmlentities($age_old) ?>" type="hidden" />
		<input id="average_old" name="average_old" value="<?php echo htmlentities($average_old) ?>" type="hidden" />
		<input id="clubName_old" name="clubName_old" value="<?php echo htmlentities($clubName_old) ?>" type="hidden" />
		<input id="active_old" name="active_old" value="<?php echo $active_old; ?>" type="hidden" />
		<input id="dateUpdated_old" name="dateUpdated_old" value="<?php echo htmlentities($dateUpdated_old) ?>" type="hidden" />
		
	</form>
		
		
		
	</body>
	
	
</html>

