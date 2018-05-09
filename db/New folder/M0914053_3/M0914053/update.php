<?php
	include('connection.php');
	$query;
	if(isSet($_GET['iUpdate'])){
		$id=$_GET['iID'];
		$username=$_GET['iUsername'];
		if(isSet($id) && $username != "" && $id != ""){
			$query="UPDATE users SET username=$username WHERE userID=$id";
			if ($conn->query($query) === TRUE) {
    			echo "Record updated successfully";
			} else {
    			echo "Error: " . $query . "<br>" . $conn->error;
			}
			$query="SELECT userID,username FROM users Where userID='$id'";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	tr,td,table{
		border-style:hidden;
	}
</style>

<body>
	<form method="get" action="update.php" >
		<fieldset>
			<legend>Update Username</legend>
			<table>
				<tr>
					<td>ID</td>
					<td>:&nbsp;&nbsp;<input type="text" name="iID"></td>
				</tr>
				<tr>
					<td>New Username</td>
					<td>:&nbsp;&nbsp;<input type="text" name="iUsername"></td>
				</tr>
			</table>
			
			<input type="submit" name="iUpdate" value="UPDATE">
		</fieldset>
	</form>
	<br>
	<a href="users.php" >BACK</a>
	<?php
		if(isSet($_GET['iUpdate'])){
			if($res=$conn->query($query)){
				while ($row=$res->fetch_array()){
					echo "<hr>";
					echo "Username for ID ".$row['userID']." is updated <br>";
					echo "New username: ".$row['username'];
				}
			}
		}
	?>
</body>
</html>