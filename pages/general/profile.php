<?php  ?>
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
			#profile-btn {
				margin-top:21%;
			}

			#userImage{
				margin-top:10%;
				width:200px;
				height:200px;
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
				
				padding: 20px;
				
			}
		</style>
	</head>
			
		<?php
			include '../layout/header.php';
			include '../layout/navbar.php';
			include '../layout/sidebar.php';
		?>

	<body>
		

		<div id="content" style="">

			<div class="w3-container w3-card w3-flat-wet-asphalt">
				<h1>Profile</h1>
			</div>
			
			<!-- content -->
			
			<div class = "container" style = "">
				<div>	
					<img id="userImage" class="w3-display-middle" src = "../../img/profile.jpg" alt = "Profile">
				</div>
				<div>
					<input type="button" id = "profile-btn"  class="w3-display-middle w3-btn w3-black"  value="Update Profile" style="max-width:600px">
				</div>
				
				

				<div id = "profile-modal" class = "w3-display-topmiddle w3-container w3-card-4 w3-light-grey ">
					<div class = "modal-content">
						<h2>Update User Info</h2>
						<p>Name: Tomi</p>
						<p>
						<input id="iPassword" class="w3-input w3-border" name="last" type="password" placeholder="Password"></p>
						
						<p>
						<input id="iConfirmPass" class="w3-input w3-border" name="first" type="password" placeholder="Confirm Password"></p>
						
						<p>
						<input id="iPhone" class="w3-input w3-border" name="first" type="text" placeholder="Phone"></p>
						
						<p>
						<input id="iAddress" class="w3-input w3-border" name="first" type="text" placeholder="Address"></p>
						<a href = "profile.php" id = "update-btn-modal" type = "button">UPDATE</a>
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