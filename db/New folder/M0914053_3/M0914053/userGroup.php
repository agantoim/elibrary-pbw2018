<?php 
	include('connection.php');
	
	if(isSet($_GET['iSubmit'])){
		$group=$_GET['iGroup'];
		if(isSet($group) && $group !=""){
			$query=" INSERT INTO usergroups (name) VALUES ('$group') ";
			if ($conn->query($query) === TRUE) {
    			echo "New record created successfully";
			} else {
    			echo "Error: " . $query . "<br>" . $conn->error;
			}
		}
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<table>
		<tr>
			<th>Role</th>
		</tr>
		<?php
			if($res=$conn->query("select name from usergroups")){
				while($row=$res->fetch_array()){
					echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "</tr>";
				}
			}
			
		?>
	</table>
	<br>

	<br>
	<form method="get" action="userGroup.php" style="width:30%">
		<fieldset>
			<legend>Add New Role</legend>
			<input type="text" name="iGroup">
			<input type="submit" name="iSubmit" value="ADD">
		</fieldset>
	</form>
</body>
</html>