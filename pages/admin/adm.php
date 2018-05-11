<?php
	include '../../connect/connection.php';
	session_start();
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
            
		</style>
	</head>
	<body>
		<!-- CONTENT -->

		<?php
			include '/headerAdm.php';
			include '/navbarAdm.php';
			include '/sidebarAdm.php';
		?>

		<!-- Sidebar -->

		<!-- Page Content -->
		<div id="content" style="">

			<div class="w3-container w3-card w3-flat-wet-asphalt">
				<h1>Welcome to eLibrary!</h1>
			</div>

			<div class="w3-container">
				<h2>Welcome to eLIBRARY!</h2>
				
			</div>

			<?php
			include '../layout/footer.php';
		?>

		<!-- <div class = "ver-navigation">
			<ul>
				<li><h4>MENU</h4>
				<li><a href = "book.php">Book List</a>
				<li><a href = "borrow.php">Borrowing History</a>
				<li><a href = "#download">Download Journal</a>
			</ul>
		</div> -->
		
	</body>
</html>