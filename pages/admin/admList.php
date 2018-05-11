<?php 
	include '../../connect/connection.php';
	session_start();
	
	if(isSet($_POST['iAdd'])){
		$getUsername=$_POST['username'];
		$getName=$_POST['name'];
		$getPhone=$_POST['phone'];
		$getAddress=$_POST['address'];
		$tempPass=generatePassword();
		//$getCate=$_POST['category'];
		$query="INSERT INTO anggota (username, password, nama_anggota, phone,address,status_user)
		VALUES ('$getUsername', '$tempPass','$getName',$getPhone,'$getAddress',1)";
		if ($conn->query($query) === TRUE) {	
			$successModal="inline !important";
			$statusRegis='Administrator added, temporary password: '.$tempPass.'. Please change it immediately';
			
		} else {
			$successModal="inline !important";
			$statusRegis= "Username is not available! Please choose other username.";
		}	
	}
	$query="select * from anggota where status_user=1  ";
	if(isSet($_POST['iSubmit'])){
		$search=$_POST['iSearch'];
		$searchBy=$_POST['searchBy'];
		if(isSet($search) && $search !=""){
			$query .="and $searchBy LIKE '%$search%'";
		}
	}
	$successModal="block";
	$statusRegis="";
	function generatePassword($length=8){
		$char='0a1q2E3o4hbK567ec8L9idUMoxyNgzXAnBCwrfDYTGsvkHItJOhPQujmRlVWSZ';
		$charLength=strlen($char);
		$randomString='';
		for($i=0;$i<$length;$i++){
			$randomString.=$char[rand(0,$charLength-1)];
			
		}
		return $randomString;
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
            #membertable{
				margin-top: 1%;
			}
			#searchNsort{
				position:relative;
				float:right;
				display:block;
				margin-top:2%;
				margin-right:1%;
				width:53%;
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
			include '/headerAdm.php';
			include '/navbarAdm.php';
			include '/sidebarAdm.php'
		?>
		

		<div id="content" style="">

			<div id="divTopContent" class="w3-container w3-card w3-flat-wet-asphalt">
				<div id="titleContent">
					<h1>Admin List</h1>
				</div>
				<div id="searchNsort" class="">
					<form method="post" class="admList.php">
						<input type="text" style="margin-right:1%;" name="iSearch" placeholder="Search admin...">
						by
						<select name="searchBy">
							<option value="id">ID</option>
							<option value="nama_anggota">Name</option>
							<option value="phone">Phone</option>
							<option value="address">Address</option>
						</select>
						<input class="" type="submit" value="SEARCH" name="iSubmit" style="margin-right:1%;">
						
					</form>
					<div style="float:right; margin-top:-5.25%;">
							<input  style="" id = "profile-btn" class="" type="submit" value="ADD ADMIN" name="">				
					</div>
				</div>
			</div>
			
			<p style="margin-left:2%; color:slategray;"><?php echo $statusRegis?></p>
			<div class="w3-container" style="margin-bottom:5%;">
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
								echo "<td>".$row['nama_anggota']."</td>";
								echo "<td>".$row['phone']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "</tr>";
							}
						}
					?>
				</table>
			</div>

			<div id = "profile-modal" class = "w3-modal" style="margin-bottom:5%;">
				<div style="position:fixed;" class = "w3-display-topmiddle modal-content">
					<form method="POST" action="admList.php">
						<h2>New Administrator</h2>
						<p><input id="username" class="w3-input w3-border" name="username" type="text" placeholder="Username" required></p>
						<p><input id="name" class="w3-input w3-border" name="name" type="text" placeholder="Name" required></p>
						<p><input id="phone" class="w3-input w3-border" name="phone" type="text" placeholder="Phone" required></p>
						<p><input id="address" class="w3-input w3-border" name="address" type="text" placeholder="Address" required></p>
							<input type="submit" id="iReg" name="iAdd" class="w3-btn w3-black" value="Register"></p>
					</form>
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