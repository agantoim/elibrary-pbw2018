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

			.content {
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
				<li><a href = "../user/usr.php">Home</a>
				<li><a class = "active" href = "news.php">News</a>
				<li><a href = "profile.php">Profile</a>
				<li style = "float:right"><a href = "logout.php">Logout</a>
			</ul>	
		</div>

		<div class = "ver-navigation">
			<ul>
				<li><h4>MENU</h4>
				<li><a href = "../user/book.php">Book List</a>
				<li><a href = "../user/borrow.php">Borrowing History</a>
				<li><a href = "#download">Download Journal</a>
			</ul>
		</div>

		<div style = "margin-left:13%; padding:1px 1px; height:500px;">
		<div class = "content">
		<h2>Trump election: Priebus and Bannon given key roles</h2>
		<p>
			US President-elect Donald Trump has awarded key roles in his incoming team to a top Republican party official and a right-wing media chief.
			Reince Priebus, chairman of the Republican National Committee (RNC), will be his chief of staff.
			In this role, he will set the tone for the new White House and act as a conduit to Congress and the government.
			Stephen Bannon, from the Breitbart News Network, will serve as Mr Trump's chief strategist.
			Mr Bannon stepped aside as executive chairman of Breitbart - a combative conservative site with an
			anti-establishment agenda - to act as Mr Trump's campaign chief.
			Meanwhile, in the president-elect's first interview, with US broadcaster CBS, Mr Trump said:
			<ul>
				<li>He would deport or jail up to three million illegal migrants with criminal links</li>
				<li>Future Supreme Court nominees would be "pro-life" - meaning they oppose abortion - and defend the 
				constitutional right to bear arms</li>
				<li>He will not seek to overturn the legalisation of same-sex marriage</li>
				<li>He will forgo the president's $400,000 salary, taking $1 a year instead</li>
				</ul>
		</p>
		<p>
			In a statement released by his campaign, Mr Trump described Mr Priebus and Mr Bannon as "highly qualified 
			leaders who worked well together on our campaign and led us to a historic victory".
			Mr Priebus, 44, acted as a bridge between Mr Trump and the Republican party establishment during the campaign. 
			He is close to House Speaker Paul Ryan, a fellow Wisconsinite who could be instrumental in steering the new 
			administration's legislative agenda.
		</p>
		</div>
		</div>
	</body>
</html>