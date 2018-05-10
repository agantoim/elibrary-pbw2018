<?php
	include '../../connect/connection.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>eLibrary</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="../../style/style.css">
		<link rel="stylesheet" href="../../lib/w3.css">
		<link rel="stylesheet" href="../../lib/w3-colors-flat.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="../../lib/font-awesome.min.css">
		<link rel="stylesheet" href="../../lib/font-awesome.css">

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
			#profile-btn {
				background-color: black;
				border: none;
				color: white;
				padding: 20px 40px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				margin: 10px;
				margin-left: 0.5%;
			}

			#update-btn-modal {
				background-color: black;
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
                width: 30%;
				color:black;
            }
		</style>
	</head>

	<body>
		<?php
			include '../layout/header.php';
			include '../layout/navbar.php';
			include '../layout/sidebar.php';
		?>
		
		<div id="content" style="">
			<div class="w3-container w3-card w3-flat-wet-asphalt">
				<h1>Profile</h1>
			</div>
				<div style = "margin-left:7%; margin-top:1%; padding:1px 1px; height:500px;">
					
					<div class = "container" style = "margin-left:0%; padding:1px 1px;">
						<img src = "../../img/profile.jpg" alt = "Profile" style = "width:200px; height:200px;">
						<a><button id = "profile-btn">Update Profile</button></a>

						<div id = "profile-modal" class = "modal">
							<div class = "modal-content">
								<h2>Update User Info</h2>
								<p>Name: <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?></p>
								<p>
								<input id="iPassword" class="w3-input w3-border" name="last" type="password" placeholder="Password"></p>
								<p>
								<input id="iConfirmPass" class="w3-input w3-border" name="first" type="password" placeholder="Confirm Password"></p>
								<p>
								<input id="iPhone" class="w3-input w3-border" name="first" type="text" placeholder="Phone"></p>
								<p>
								<input id="iAddress" class="w3-input w3-border" name="first" type="text" placeholder="Address"></p>
								<a class="" href = "profile.php" id = "update-btn-modal" type = "button">UPDATE</a>
							</div>
						</div>
					</div>
				</div>
			<?php
				include '../layout/footer.php';
		?>
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