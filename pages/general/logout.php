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
			.button {
				margin-left: 43%;
				width: 50%;
			}

			#signup-btn:hover, #login-btn:hover {
				opacity: 0.8;
			}

			body {
				background-color: #12366F;
			}

			img {
				display: block;
				margin-left: auto;
				margin-right: auto;
				width: 0%;
			}

			.container {
				background-color: azure;
				padding: 75px;
				margin-left: auto;
				margin-right: auto;
				width: 90%;
			}

			#signup-btn {
				background-color: #3D66C2;
				border: none;
				color: white;
				padding: 15px 30px;
				text-align: center;
				text-decoration: none;
			}

            #login-btn {
				background-color: #3D66C2;
				border: none;
				color: white;
				padding: 15px 30px;
				text-align: center;
				text-decoration: none;
			}

			h3 {
				text-align: center;
			}

		</style>
	</head>

	<body>
		<!-- CONTENT -->
		<header class = "w3-display-container w3-wide" id = "home">
   			<img class = "w3-image" src = "../../img/banner.jpg" alt = "Library" style = "width:auto; height:auto;">
    		<div class="w3-display-center w3-padding-large">
      			<h1 class="w3-jumbo w3-text-white w3-hide-small" style="text-align:center;"><b>eLibrary</b></h1>
    		</div>
  		</header>

		<div class = "container">
			<h3>You have successfully logged out.</h3>

			<div class = "button">
				<a id = "signup-btn" href = "signup.php" type = "button">SIGN UP</a>
				<a id = "login-btn" href = "login.php" type = "button">LOGIN</a>
			</div>
		</div>
	</body>
</html>