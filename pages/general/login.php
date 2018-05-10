<?php
	include '../../connect/connection.php';
	session_start();
	$errorQuery="none";
	$redirectLink="";
	$getUname="";
	$getPass="";
	$errorMsg="";
	if(isSet($_POST['iLogin'])){
		$getUname=$_POST['iUsername'];
		$getPass=$_POST['iPassword'];
		
		
		$checkUser="SELECT username,password,status_user FROM `anggota` WHERE username='$getUname'";
		$checkPass="SELECT password,status_user FROM `anggota` WHERE username='$getUname' and password='$getPass'";
		//$checkStatusUser="SELECT status_user FROM `anggota` WHERE username='$getUname' and password='$getPass'";
		
		//$res=$mysqli->use_result();

		$checkUname=$conn->query($checkUser);
		$checkPass=$conn->query($checkPass);
		$pageDiffer='';

		if($checkUser===false){
			echo "wrong query";
		}else if($checkUname->num_rows == 1){
			$_SESSION['user']=$_POST['iUsername'];
			if($checkPass->num_rows == 1){
				$row=$checkPass->fetch_assoc();

				if($row['status_user']==0){
					$_SESSION['status_user']=0;
					header('location:../user/usr.php');
					
				}
				else{
					$_SESSION['status_user']=1;
					header('location:../admin/adm.php');
				}
			}else{
				$errorMsg="Wrong Password!";
				$errorQuery="visible";
			}
			//$_SESSION['statusUser']=$_POST[''];
		}else{
			$errorMsg="Wrong Username!";
			$errorQuery="visible";
		}
		
	}
?>
<!DOCTYPE html>
<html>
	<style>
		#errorMsg{
			width:20%;
			background-color:red;
			margin-top:8%;
			text-align: center;
			height:7%;
		}
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
			<form method="POST" class="login.php">
			  <h2>Login</h2>
			  <p>
			  <input id="iUsername" class="w3-input w3-border" name="iUsername" type="text" placeholder="Username" required></p>
			  
			  <p>
			  <input id="iPassword" class="w3-input w3-border" name="iPassword" type="Password" placeholder="Password" required></p>
			  <p>
			  	<a><input type="submit" onclick="" name="iLogin" id="iLogin" class="w3-btn w3-black" value="Login"></a>
				<a><input type="submit" onclick="location.href='../../index.php';" name="iLogin" id="iCancel" class="w3-btn w3-black" value="Cancel"></a></p>
				
			</form>
		</div>
		<div id="errorMsg" class="w3-card w3-display-middle" style="display:<?php echo $errorQuery?>">
			<p style=""><?php echo $errorMsg?></p>
		</div>
	</body>
</html>