<?php
	include '../../connect/connection.php';
	session_start();
	$query="select * from peminjaman";
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

			<div class="w3-container" style="margin-bottom:5%;">
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
					<?php
						if($res=$conn->query($query)){
							while($row=$res->fetch_array()){
								echo "<tr>";
								echo "<td>".$row['book_code']."</td>";
								echo "<td>".$row['title']."</td>";
								echo "<td>".$row['author']."</td>";
								echo "<td>".$row['borrow_date']."</td>";
								echo "<td>".$row['return_date']."</td>";
								echo "<td>".$row['due']."</td>";
								echo "<td>".$row['fine']."</td>";
								echo "</tr>";
							}
						}
					?>
				</table>
			</div>

			<?php
			include '../layout/footer.php';
		?>
	</body>
</html>