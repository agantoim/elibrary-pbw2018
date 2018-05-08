<?php  ?>
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
            #membertable{
				margin-top: 1%;
			}
			#searchNsort{
				position:relative;
				float:right;
				display:block;
				margin-top:2%;
				margin-right:1%;
				width:47%;
			}
			select{
				width:75px;
				margin-left:2%;
				margin-right:2%;
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
			include '/sidebarAdm.php'
		?>
		

		<div id="content" style="">

			<div id="divTopContent" class="w3-container w3-card w3-flat-wet-asphalt">
				<div id="titleContent">
					<h1>Book List</h1>
				</div>
				<div id="searchNsort" class="">
				<input type="text" style="margin-right:1%;" placeholder="Search admin...">
				by
				<select>
					<option value="ID">ID</option>
					<option value="Name">Name</option>
					<option value="Phone">Phone</option>
					<option value="Address">Address</option>
				</select>
				<input class="" type="submit" value="SEARCH"  style="margin-right:1%;">
				<input class="" type="submit" value="ADD ADMIN">
				</div>
			</div>

			<div class="w3-container">
			<table id="membertable" class="w3-table-all w3-hoverable w3-card">
					<thead>
					<tr class="w3-blue">
						<th>ID</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Address</th>
					</tr>
					</thead>
					<tr>
						<td>adm1</td>
						<td>Admin1</td>
						<td>0220000</td>
						<td>Indonesia</td>
					</tr>
					<tr>
						<td>adm2</td>
						<td>Admin2</td>
						<td>0220000</td>
						<td>Indonesia</td>
					</tr>
					<tr>
						<td>adm3</td>
						<td>Admin3</td>
						<td>0220000</td>
						<td>Indonesia</td>
					</tr>
				</table>
			</div>

			<?php
			include '../layout/footer.php';
		?>

			
	</body>
</html>