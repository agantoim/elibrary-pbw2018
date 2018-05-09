<?php
	include '../../connect/connection.php';
		
//echo "$getAddress,$getName,$getPass,$getPassCnfrm,$getPhone,$getUname";

		if(isSet($_POST['iReg'])){
			// $getUname=$_GET['username'];
			// $getPass=$_GET['password'];
			// $getPassCnfrm=$_GET['passwordConfrm'];
			// $getName=$_GET['name'];
			// $getPhone=$_GET['phone'];
			// $getAddress=$_GET['address'];

			
				
		
	}
		
		//echo "$getAddress,$getName,$getPass,$getPassCnfrm,$getPhone,$getUname";
		
		// if(isset($_GET['iReg'])){
		// 	$sql = "INSERT INTO anggota (id,username, password, nama_anggota, phone,address,status_user)
		// 	VALUES ('$getUname', '$getPass', '$getPassCnfrm','$getName','$getPhone','$getAddress','0')";
		// 		if ($conn->query($sql) === TRUE) {
		// 			echo "New record created successfully";
		// 		} else {
		// 			echo "Error: " . $sql . "<br>" . $conn->error;
		// 		}
		// }
	

		// echo '$getUname,$getPass,$getPassCnfrm,$getName,$getPhone,$getAddress'

	// if(isset($_POST['iReg'])){
	
// }
// else{
// 	if(empty($_GET['username'])){
// 		$unameErr="Username is required";
// 		echo "<p style='visibility: visible'>alert($unameErr !<br>)</p>";
// 	}
// 	else{
// 		echo ""
// 	}
// 	if(empty($_GET['password'])){
// 		$passErr="Password is required";
// 		// echo "alert($passErr !<br>)";
// 	}
// 	if(empty($_GET['passwordConfrm'])){
// 		$passCnfrmErr="Confirmation password is required";
// 		// echo "alert($passCnfrmErr !<br>)";
// 	}
// 	else
// 	if(isset($_GET['username'])){
// 		$uname=$_GET['username'];
// 		$pass=$_GET['password'];
// 		$passCnfrm=$_GET['passwordConfrm'];
// 		if(!preg_match("/^[a-zA-Z]*$/",$uname)){
// 			$unameErr="Only letters and white space allowed";
// 			echo "$unameErr <br>";
// 		}
// 		if(!preg_match("/^[a-zA-Z]*$/",$pass)){
// 			$passErr="Only letters and white space allowed";
// 			echo "$passErr <br>";
// 		}
// 		if(!preg_match("/^[a-zA-Z]*$/",$passCnfrm)){
// 			$passCnfrmErr="Duration time cannot be 0 <br>";
// 			echo "$passCnfrmErr <br>";
// 		}
// 		else{
// 			echo "Submited! Thank you!";
// 		}
// 	}
// }
	
?>
<!DOCTYPE html>
<html>
	<style>
		
	</style>
	<head>
		<title>eLibrary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="../../lib/w3.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="../../lib/font-awesome.min.css">
		<link rel="stylesheet" href="../../lib/font-awesome.css">
		<link rel="stylesheet" href="../../lib/w3-colors-flat.css">
		<link rel="stylesheet" href="../../style/style.css">
	</head>
	<body>
		<!-- CONTENT -->
		<header id='banner' class='container w3-card-4 w3-display-topmiddle' style='width: 98%; margin-top: 1%'>
			<img class='' src="\..\elibrary\elibrary-pbw2018\img\banner2.jpg" alt="library" style='width: 100%'>
			<div class='centered'>
				<h1 class='bannerFont w3-jumbo w3-text-white w3-hide-small'>eLIBRARY</h1>
			</div>
		</header>
		<div id='form' class="w3-display-topmiddle w3-container w3-card-4 w3-light-grey ">
			<form method="post" action="signup.php">
			  <h2>Create New Account</h2>
			  <p>
			  <input id="iUsername" class="w3-input w3-border" name="username" type="text" placeholder="Username" required></p>
			  
			  <p>
			  <input id="iPassword" class="w3-input w3-border" name="password" type="password" placeholder="Password" required></p>
			  
			  <p>
			  <input id="iConfirmPass" class="w3-input w3-border" name="passwordConfrm" type="password" placeholder="Confirm Password" required></p>
			 
			  <p>
			  <input id="iName" class="w3-input w3-border" name="name" type="text" placeholder="Name" required></p>
			  
			  <p>
			  <input id="iPhone" class="w3-input w3-border" name="phone" type="text" placeholder="Phone"></p>
			  
			  <p>
			  <input id="iAddress" class="w3-input w3-border" name="address" type="text" placeholder="Address"></p>
			  <p>
			  <input type="submit" id="iReg" class="w3-btn w3-black" value="Register">
			  <a href="../../index.php">
			  	<input type="button" onclick="location.href='../../index.php';" id="iCancel" class="w3-btn w3-black" value="Cancel">
			  </a></p>
			
			<?php
				$getUname=$_POST['username'];
				$getPass=$_POST['password'];
				$getPassCnfrm=$_POST['passwordConfrm'];
				$getName=$_POST['name'];
				$getPhone=$_POST['phone'];
				$getAddress=$_POST['address'];
				$query="INSERT INTO anggota (username, password, nama_anggota, phone,address,status_user)
				VALUES ('$getUname', '$getPass','$getName','$getPhone','$getAddress','0')";
				if ($conn->query($query) === TRUE) {	
					echo "New record created successfully";
				} else {
					echo "Error: " . $query . "<br>" . $conn->error;
				}
			?>
			

			</form>
			<!-- <div class="w3-card">
  				<?=$unameErr?>
			</div> -->
		</div>
	</body>
</html>