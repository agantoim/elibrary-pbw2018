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

			h1{
				color: white;
			}

			#profile-btn {
				background-color: #3D66C2;
				border: none;
				color: white;
				padding: 20px 40px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				margin: 10px;
				margin-left: 45%;
			}

			#update-btn-modal {
				background-color: #3D66C2;
				border: none;
				color: white;
				padding: 10px 15px;
				text-align: center;
				text-decoration: none;
			}

			#profile-btn:hover, #update-btn-modal:hover {
				opacity: 0.8;
			}

			.modal {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0,0.4);
                padding-top: 60px;
            }    

            .modal-content {
                background-color: #fefefe;
                margin: 10% auto 15% auto;
				padding: 20px;
                width: 18%;
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
				<li><a href = "../general/news.php">News</a>
				<li><a class = "active" href = "../general/profile.php">Profile</a>
				<li style = "float:right"><a href = "../general/logout.php">Logout</a>
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
			<h1>Profile</h1>
			
			<div class = "container" style = "margin-left:0%; padding:1px 1px;">
				<img src = "../../img/profile.jpg" alt = "Profile" style = "width:200px; height:200px;">
				<button id = "profile-btn">Update Profile</button>

				<div id = "profile-modal" class = "modal">
					<div class = "modal-content">
						<h2>Update User Info</h2>
						<p>Name: Anton</p>
						<input type = "password" placeholder = "Password" style = "width:300px"><br><br>
                		<input type = "password" placeholder = "Confirm Password" style = "width:300px"><br><br>
                		<input type = "text" placeholder = "Phone" style = "width:300px"><br><br>
                		<input type = "text" placeholder = "Address" style = "width:300px"><br><br>
						<a href = "profile.php" id = "update-btn-modal" type = "button">UPDATE</a>
					</div>
				</div>	
			</div>
		</div>	
	</body>

	<script>
		var modal = document.getElementById('profile-modal');
		var btn = document.getElementById('profile-btn');

		btn.onclick = function() {
			modal.style.display = "block";
		}

		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</html>