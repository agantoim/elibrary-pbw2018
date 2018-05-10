<?php
	include '../../connect/connection.php';
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- OPTIONAL -->
		<link rel="stylesheet" href="../../style/style.css">
		<link rel="stylesheet" href="../../lib/w3.css">
		<link rel="stylesheet" href="../../lib/w3-colors-flat.css">
		<link rel="stylesheet" href="../../lib/w3-theme-riverside.css">
		<link rel="stylesheet" href="../../lib/font-awesome.min.css">
		<link rel="stylesheet" href="../../lib/font-awesome.css">

		<style>
             #borrowTable{
				margin-top: 1%;
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

			<div id="divTopContent" class="w3-container w3-card w3-flat-wet-asphalt">
				<div id="titleContent">
					<h1>Borrowing History</h1>
				</div>
				
			</div>

			<div class="w3-container">
			<table id="borrowTable" class="w3-table-all w3-hoverable w3-card">
					<thead>
					<tr class="w3-blue">
						<th>Code</th>
						<th>Title</th>
						<th>Author</th>
						<th>Borrow Date</th>
						<th>Return Date</th>
						<th>Overdue</th>
						<th>Fee</th>
					</tr>
					</thead>
					<tr>
						<td>A0001</td>
						<td>Book1</td>
						<td>Jill</td>
						<td>2011/11/1</td>
						<td>2011/11/8</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>A0002</td>
						<td>Book2</td>
						<td>Jackson</td>
						<td>2011/11/2</td>
						<td>2011/11/9</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>A0003</td>
						<td>Book3</td>
						<td>Johnson</td>
						<td>2011/11/3</td>
						<td>2011/11/10</td>
						<td>0</td>
						<td>0</td>
					</tr>
				</table>
			</div>

			<?php
			include '../layout/footer.php';
		?>
	</body>
</html>