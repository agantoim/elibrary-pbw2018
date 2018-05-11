<?php
	include '../../connect/connection.php';
	session_start();
	$query="select * from buku";
	if(isSet($_POST['iSubmit'])){
		$search=$_POST['iSearch'];
		$searchBy=$_POST['order'];
		if(isSet($search) && $search !=""){
			$query .=" where $searchBy  LIKE '%$search%'";
		}
	}
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
				width:43.5%;
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
				<form method="post" class="member.php">
					<input type="text" style="margin-right: 15px;" name="iSearch" placeholder="Search books...">
					by
					<select name="order">
						<option value="title">Title</option>
						<option value="author">Author</option>
						<option value="pub_year">Publication Year</option>
						<option value="publisher">Publisher</option>
					</select>
					<input class="" type="submit" value="SEARCH" name="iSubmit" style="margin-right:1%;">
					</form>
				</div>
			</div>

			<div class="w3-container" style="margin-bottom:5%;">
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
					<?php
						if($res=$conn->query($query)){
							while($row=$res->fetch_array()){
								echo "<tr>";
								echo "<td>".$row['book_code']."</td>";
								echo "<td>".$row['title']."</td>";
								echo "<td>".$row['author']."</td>";
								echo "<td>".$row['pub_year']."</td>";
								echo "<td>".$row['publisher']."</td>";
								echo "<td>".$row['category']."</td>";
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