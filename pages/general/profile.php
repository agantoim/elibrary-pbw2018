<?php
	include '../../connect/connection.php';
	session_start();
	$successModal="none";
	$statusUpdate="";
	if(isSet($_POST['iUpdate'])){
		$getPass=$_POST['iPassword'];
		$getPassCnfrm=$_POST['iConfrmPass'];
		$getPhone=$_POST['iPhone'];
		$getAddress=$_POST['iAddress'];
		$userFromSession=$_SESSION['user'];
		$query="UPDATE `anggota` SET `password`='$getPass',`phone`='$getPhone',`address`='$getAddress' WHERE `username`='$userFromSession'";
		$compare2Pass=strcmp($getPass,$getPassCnfrm);
		echo $compare2Pass;
			if($compare2Pass==0){	
				if ($conn->query($query) === TRUE) {
					$successModal="inline !important";
					$statusUpdate="Success updating profile.";
				} else {
					$successModal="inline !important";
					$statusUpdate= "Update Fail!";
				}
			}
			else {
				$successModal="inline !important";
				$statusUpdate="Password did not match!";
			}
	}
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
			#profile-modal{
				
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
			#errorMsg{
			width:20%;
			background-color:red;
			margin-top:22%;
			margin-left:13%;
			text-align: center;
			height:7%;
		}
		</style>
	</head>

	<body>
		<?php
			include '../layout/header.php';
			if($_SESSION['status_user']==0)
			{
				include '../layout/navbar.php';
				include '../layout/sidebar.php';
			}
			else{
				include '../admin/navbarAdm.php';
				include '../Admin/sidebarAdm.php';
			}
		?>
		
		<div id="content" style="">
			<div class="w3-container w3-card w3-flat-wet-asphalt">
				<h1>Profile</h1>
			</div>
				<div style = "margin-left:7%; margin-top:1%; padding:1px 1px; height:500px;">
					
					<div class = "container" style = "margin-left:0%; padding:1px 1px;">
						<img src = "../../img/profile.jpg" alt = "Profile" style = "width:200px; height:200px;">
						<a><button id = "profile-btn">Update Profile</button></a>

						<div id = "profile-modal" class = "w3-modal" style="">
							<div class = "w3-modal-content" style="width:35%; padding:30px;">
							<h2 class="" style="color:black;">Update User Info</h2>
							<form method="POST" action="profile.php" style="">
								<p style="color:black;">Name: <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?></p>
								<p>
								<input id="iPassword" class="w3-input w3-border" name="iPassword" type="password" placeholder="Password"></p>
								<p>
								<input id="iConfirmPass" class="w3-input w3-border" name="iConfrmPass" type="password" placeholder="Confirm Password"></p>
								<p>
								<input id="iPhone" class="w3-input w3-border" name="iPhone" type="text" placeholder="Phone"></p>
								<p>
								<input id="iAddress" class="w3-input w3-border" name="iAddress" type="text" placeholder="Address"></p>
								<a><input type="submit" onclick="" name="iUpdate" id="iUpdate" class="w3-btn w3-black" value="Update"></a>
								<!-- <a class=""  href = "profile.php" id = "update-btn-modal" type = "submit">UPDATE</a> -->
							</form>
							</div>
						</div>
					</div>
					<div id="errorMsg" class="w3-card w3-display-middle" style="display:<?php echo $successModal?>">
						<p style=""><?php echo $statusUpdate?></p>
					</div>
				</div>

				
			<?php
				include '../layout/footer.php';
		?>
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
	</body>

	
</html>