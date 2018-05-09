<?php
	//echo 'Request diterima'; //TODO : dihapus
?>

<?php 
	include('layout/header.php');
		if(empty($_GET['title'])){
			$titleErr="Title is required";
			echo "$titleErr !<br>";
		}
		if(empty($_GET['author'])){
			$authErr="Author is required";
			echo "$authErr !<br>";
		}
		if(empty($_GET['duration'])){
			$duraErr="Duration is required";
			echo "$duraErr !<br>";
		}
		else
		if(isset($_GET['title'])){
			$title=$_GET['title'];
			$auth=$_GET['author'];
			$dura=$_GET['duration'];
			if(!preg_match("/^[a-zA-Z]*$/",$title)){
				$titleErr="Only letters and white space allowed";
				echo "$titleErr <br>";
			}
			if(!preg_match("/^[a-zA-Z]*$/",$auth)){
				$authErr="Only letters and white space allowed";
				echo "$authErr <br>";
			}
			if($dura=="0"){
				$duraErr="Duration time cannot be 0 <br>";
				echo "$duraErr <br>";
			}
			else{
				echo "Submited! Thank you!";
			}
		}
	
	include('layout/footer.php');
?>