<?php 
	include('connection.php');
	$query="select * from user_data";
	if(isSet($_GET['iSubmit'])){
		$name=$_GET['iName'];
		if(isSet($name) && $name !=""){
			$query .=" WHERE name LIKE '%$name%'";
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form method="get" action="users.php" >
		<fieldset>
			<legend>Search by Name</legend>
			<input type="text" name="iName">
			<input type="submit" name="iSubmit" value="SEARCH">
		</fieldset>
	</form>
	<br>
	<a href="update.php" >UPDATE</a>
	<br>
	<br>
		<?php
			//if($res=$conn->query($query)){
				//while($row=$res->fetch_array()){
					//echo "<tr>";
					//echo "<td>".$row['userID']."</td>";
					//echo "<td>".$row['name']."</td>";
					//echo "<td>".$row['role']."</td>";
					//echo "</tr>";
				//}
			//}
		?>
			
	<br>
	<table>
		<tr>
			<th>User ID</th>
			<th>Name</th>
			<th>Role</th>
		</tr>
		<?php
			//$query="select userID,name,role from user_data";
			if($res=$conn->query($query)){
				while($row=$res->fetch_array()){
					echo "<tr>";
					echo "<td>".$row['userID']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['role']."</td>";
					echo "</tr>";
				}
			}
		?>
	</table>
</body>
</html>