<?php  ?>
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
			<form class="">
			  <h2>Login</h2>
			  <p>
			  <input id="iUsername" class="w3-input w3-border" name="first" type="text" placeholder="Username"></p>
			  
			  <p>
			  <input id="iPassword" class="w3-input w3-border" name="last" type="Password" placeholder="Password"></p>
			  <p>
			  	<a href="../user/usr.php"><input type="button" onclick="location.href='../user/usr.php';" id="iLogin" class="w3-btn w3-black" value="Login"></a>
				<a href="../../index.php"><input type="button" onclick="location.href='../../index.php';" id="iCancel" class="w3-btn w3-black" value="Cancel"></a></p>
			  
			</form>
		</div>
	</body>
</html>