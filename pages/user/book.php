<?php
	include '../../connect/connection.php'
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
            #booktable{
				margin-top: 1%;
			}
			#searchNsort{
				float:right;
				display:block;
				margin-top:2%;
				margin-right:1%;
				width:40%;
			}
			select{
				width:75px;
				margin-left:15px;
				margin-right:15px;

			}
			#titleContent{
				float:left;
				display:block;
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
					<h1>Book List</h1>
				</div>
				<div id="searchNsort" class="">
				<input type="text" style="margin-right: 15px;" placeholder="Search books...">
				by
				<select>
					<option value="Title">Title</option>
					<option value="Author">Author</option>
					<option value="Publication Year">Publication Year</option>
					<option value="Publisher">Publisher</option>
				</select>
				<input class="" type="submit" value="SEARCH">
				</div>
			</div>

			<div class="w3-container">
			<table id="booktable" class="w3-table-all w3-hoverable w3-card">
					<thead>
					<tr class="w3-blue">
						<th>Code</th>
						<th>Title</th>
						<th>Author</th>
						<th>Publication Year</th>
						<th>Publisher</th>
						<th>Category</th>
					</tr>
					</thead>
					<tr>
						<td>A0001</td>
						<td>Book1</td>
						<td>Jill</td>
						<td>2001</td>
						<td>Pub1</td>
						<td>Category1</td>
					</tr>
					<tr>
						<td>A0002</td>
						<td>Book2</td>
						<td>Jackson</td>
						<td>2002</td>
						<td>Pub2</td>
						<td>Category2</td>
					</tr>
					<tr>
						<td>A0003</td>
						<td>Book3</td>
						<td>Johnson</td>
						<td>2003</td>
						<td>Pub3</td>
						<td>Category3</td>
					</tr>
				</table>
			</div>

			<?php
			include '../layout/footer.php';
		?>

			
	</body>
</html>