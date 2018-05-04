<?php  ?>
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
		<link rel="stylesheet" href="../../style/style.css">

		<style>
            img {
				display: block;
				margin-left: auto;
				margin-right: auto;
				width: 0%;
			}

            body {
				background-color: #12366F;
			}

			.hrz-navigation ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: azure;
			}

			.hrz-navigation li {
				display: inline;
				float: left;
			}

			.hrz-navigation li a {
				display: block;
				color: black;
				text-align: center;
				padding: 14px 16px;
				background-color: azure;
				text-decoration: none;
			}

			.hrz-navigation li a:hover {
				background-color: #32CD32;
				color: white;
			}

			.ver-navigation ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				width: 200px;
				height: 100%;
				overflow: auto;
				background-color: azure;
			}

			.ver-navigation li h4{
				list-style-type: none;
				margin: 0;
				padding: 10px;
				width: 200px;
				overflow: hidden;
				background-color: #3D66C2;
				color: white;
				text-align: center;
			}

			.ver-navigation li a {
				display: block;
				width: 200px;
				padding: 10px;
				text-decoration: none;
				color: black;
				background-color: azure;
			}

			.ver-navigation li a:hover {
				background-color: #32CD32;
				color: white;
			}

			li a.active {
				background-color: #32CD32;
				color: white;
			}

			h1, h3 {
				color: white;
			}
		</style>
	</head>
	<body>
		<!-- CONTENT -->

		<header id='banner' class='container w3-card-4 w3-display-topmiddle' style='width: 98%; margin-top: 1%'>
			<img class='' src="\..\elibrary\elibrary-pbw2018\img\banner2.jpg" alt="library" style='width: 100%'>
			<div class='centered'>
				<h1 class='bannerFont w3-jumbo w3-text-white w3-hide-small'>eLIBRARY</h1>
			</div>
		</header>

		<div class="w3-bar w3-light-grey w3-border" style="margin-top:1%; float:right;">
		<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-sign-in"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-envelope"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-globe"></i></a>
			
			<a href="#" class="w3-bar-item w3-button w3-green w3-right"><i class="fa fa-home"></i></a>
		</div>

		<div class = "ver-navigation">
			<ul>
				<li><h4>MENU</h4>
				<li><a href = "book.php">Book List</a>
				<li><a href = "borrow.php">Borrowing History</a>
				<li><a href = "#download">Download Journal</a>
			</ul>
		</div>

		<div style = "margin-left:13%; padding:1px 1px; height:500px;">
			<h1>Welcome to eLibrary!</h1>
		</div>	
	</body>
</html>