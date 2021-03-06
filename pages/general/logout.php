<?php
	include '../../connect/connection.php';
	session_start();
	// remove all session variables
	session_unset(); 
	// destroy the session 
	session_destroy(); 
?>
<!DOCTYPE html>
<html>
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
		<style>
			
		</style>
	</head>
	<body>
		<!-- CONTENT -->
		<header id="banner" class = "w3-card w3-display-container w3-wide" id = "home">
   			<img id="imgIndex" class = "w3-image" src = "../../img/banner.jpg" alt = "Library" style = "width:auto; height:auto;">
    		<div class="centered w3-display-center w3-padding-large">
      			<h1 class="w3-jumbo w3-text-white w3-hide-small" style="text-align:center;"><b>eLIBRARY</b></h1>
    		</div>
		</header>
		<div class="w3-center" style="margin-top:5%;">
			<p><h2>You have successffuly loged out.</h2></p>
			<a href = "signup.php" >
				<button id="iLogin" class="w3-btn w3-black w3-xxlarge" style="margin:1%">
					SIGN UP
				</button>
			</a>
			
			<a href = "login.php">
				<button href = "pages/general/login.php" id="iCancel" class="w3-btn w3-black w3-xxlarge" style="margin:1%">
					LOGIN
				</button>
			</a>
		</div>
		<div>
			
		</div>
	</body>
</html>