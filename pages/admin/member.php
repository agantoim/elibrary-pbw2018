<?php 
	include '../../connect/connection.php';
	session_start();
	$query="select * from anggota where status_user=0 ";
	if(isSet($_GET['iSubmit'])){
		$search=$_GET['iSearch'];
		if(isSet($search) && $search !=""){
			$query .=" and username LIKE '%$search%'";
		}
	}
	// $start=0;
	// $show=8;
	// $pageContent=$conn->query($query)->num_rows/$show;
	// if(isset($_GET['start'])){
	// 	$start=$_GET['start'];
	// }
	// $query.=" LIMIT $start,$show";
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
            #membertable{
				margin-top: 1%;
			}
			#searchNsort{
				position:relative;
				float:right;
				display:block;
				margin-top:2%;
				margin-right:1%;
				width:42%;
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
			include '/headerAdm.php';
			include '/navbarAdm.php';
			include '/sidebarAdm.php'
		?>
		

		<div id="content" style="">

			<div id="divTopContent" class="w3-container w3-card w3-flat-wet-asphalt">
				<div id="titleContent">
					<h1>Member List</h1>
				</div>
				<form method="get" class="member.php">
				<div id="searchNsort" class="">
				<input type="text" style="margin-right:1%;" name="iSearch" placeholder="Search member...">
				by
				<select>
					<option value="ID">ID</option>
					<option value="Name">Name</option>
					<option value="Phone">Phone</option>
					<option value="Address">Address</option>
				</select>
				<input class="" type="submit" value="SEARCH" name="iSubmit" style="margin-right:1%;">
				</div>
				</form>
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

					<?php
						//$query="select userID,name,role from user_data";
						if($res=$conn->query($query)){
							while($row=$res->fetch_array()){
								echo "<tr>";
								echo "<td>".$row['id']."</td>";
								echo "<td>".$row['username']."</td>";
								echo "<td>".$row['phone']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "</tr>";
							}
						}
					?>



					<!-- <tr>
						<td>mem1</td>
						<td>Member1</td>
						<td>0220000</td>
						<td>Indonesia</td>
					</tr>
					<tr>
						<td>mem2</td>
						<td>Member2</td>
						<td>0220000</td>
						<td>Indonesia</td>
					</tr>
					<tr>
						<td>mem3</td>
						<td>Member3</td>
						<td>0220000</td>
						<td>Indonesia</td>
					</tr> -->
				</table>
			</div>

			<?php
			include '../layout/footer.php';
		?>

			
	</body>
</html>