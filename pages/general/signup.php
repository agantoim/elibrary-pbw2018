<?php
	include '../../connect/connection.php';
	$successModal="none";
	if(isSet($_POST['iReg'])){
		$getUname=$_POST['username'];
		$getPass=$_POST['password'];
		$getPassCnfrm=$_POST['passwordConfrm'];
		$getName=$_POST['name'];
		$getPhone=$_POST['phone'];
		$getAddress=$_POST['address'];
		$statusRegis="";
		$query="INSERT INTO anggota (username, password, nama_anggota, phone,address,status_user)
		VALUES ('$getUname', '$getPass','$getName','$getPhone','$getAddress','0')";
		$checkUser="SELECT username,password,status_user FROM `anggota` WHERE username='$getUname'";
		$compare2Pass=strcmp($getPass,$getPassCnfrm);
		echo $compare2Pass;
			if($compare2Pass==0){
				if ($conn->query($query) === TRUE) {	
					$successModal="inline !important";
					$statusRegis='Success registered as '. $getUname;
				} else {
					$successModal="inline !important";
					$statusRegis= "Username '".$getUname."' sudah digunakan!";
				}
			}
			else {
			$successModal="inline !important";
			$statusRegis="Password did not match!";
			}
	}
	
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
		<?PHP
		?>
		<!-- CONTENT -->
		<header id='banner' class='container w3-card-4 w3-display-topmiddle' style='width: 98%; margin-top: 1%'>
			<img class='' src="\..\elibrary\elibrary-pbw2018\img\banner2.jpg" alt="library" style='width: 100%'>
			<div class='centered'>
				<h1 class='bannerFont w3-jumbo w3-text-white w3-hide-small'>eLIBRARY</h1>
			</div>
		</header>
		<div id='form' class="w3-display-topmiddle w3-container w3-card-4 w3-light-grey ">
			<form method="POST" action="signup.php">
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
			  <input type="submit" id="iReg" name="iReg" class="w3-btn w3-black" value="Register">
			  <a href="../../index.php">
			  	<input type="button" onclick="location.href='../../index.php';" id="iCancel" class="w3-btn w3-black" value="Cancel">
			  </a></p>
			</form>
		</div>
			<div id="successReg" class="w3-modal" style="display:<?php echo $successModal?>" onclick="document.getElementById('successRig').style.visibility='hidden'">
				<div class="w3-modal-content w3-card-4" >
				<header class="w3-container w3-flat-wet-asphalt" > 
					<span
					class="w3-button w3-display-topright"
					></span>
					<h2>eLIBRARY Registration</h2>
				</header>
				<div class="w3-container">
					<p></p>
					<p> <?php echo $statusRegis?> </p>
				</div>
				<div>
				<a href = "login.php" >
					<button id="iLogin" class="w3-btn w3-black w3-medium" style="margin:1%">
						LOGIN
					</button>
					</a>
				
					<a href = "signup.php">
						<button href = "signup.php" id="iCancel" class="w3-btn w3-black w3-medium" style="margin:1%">
						CANCEL
						</button>
					</a>
				</div>
			</div>

			<?php
			?>
			<!-- <div class="w3-card">
  				<!-- <?=$unameErr?> -->
			</div> -->
		
	</body>
</html>