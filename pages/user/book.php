<?php  ?>
<!DOCTYPE html>
<html>
	<head>
		<title>eLibrary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="../../lib/w3.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
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

		<header class = "w3-display-container w3-wide" id = "home">
   			<img class = "w3-image" src = "../../img/banner2.jpg" alt = "Library" style = "width:auto; height:auto">
    		<div class = "w3-display-center w3-padding-large">
      			<h1 class = "w3-jumbo w3-text-white w3-hide-small" style = "text-align:center;"><b>eLibrary</b></h1>
    		</div>
  		</header>

		<div class = "hrz-navigation">
			<ul>
				<li><a href = "usr.php">Home</a>
				<li><a href = "../general/news.php">News</a>
				<li><a href = "../general/profile.php">Profile</a>
				<li style = "float:right"><a href = "../general/logout.php">Logout</a>
			</ul>	
		</div>

		<div class = "ver-navigation">
			<ul>
				<li><h4>MENU</h4>
				<li><a class = "active" href = "book.php">Book List</a>
				<li><a href = "borrow.php">Borrowing History</a>
				<li><a href = "#download">Download Journal</a>
			</ul>
		</div>

		<div style = "margin-left:13%; padding:1px 1px; height:500px;">
			<h1>Book List</h1>
		</div>	
	</body>
</html>