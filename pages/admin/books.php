<?php 
	include '../../connect/connection.php';
	session_start();
	$query="select * from buku";
	if(isSet($_GET['iSubmit'])){
		$search=$_GET['iSearch'];
		if(isSet($search) && $search !=""){
			$query .=" where  title LIKE '%$search%'";
		}
	}
	$successModal="block";
	$statusRegis="";
	if(isSet($_POST['iAdd'])){
		$getBookCode=$_POST['book_code'];
		$getTitle=$_POST['title'];
		$getAuthor=$_POST['author'];
		$getPubYear=$_POST['pubyear'];
		$getPublisher=$_POST['publisher'];
		$getCate=$_POST['category'];
		$query="INSERT INTO buku (book_code, title, author, pub_year,publisher,category)
		VALUES ('$getBookCode', '$getTitle','$getAuthor',$getPubYear,'$getPublisher','$getCate')";
		if ($conn->query($query) === TRUE) {	
			$successModal="inline !important";
			$statusRegis='Success adding book';
			header('refresh:0');
		} else {
			$successModal="inline !important";
			$statusRegis= "Cannot add book!";
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
				position:relative;
				float:right;
				display:block;
				margin-top:2%;
				margin-right:1%;
				width:52%;
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
			/* #profile-btn {
				background-color: black;
				border: none;
				color: white;
				padding: 20px 40px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				margin: 10px;
				margin-left: 0.5%;
			} */

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
		

		<div id="content" class="w3-container-fluid" style="">

			<div id="divTopContent" class="w3-container w3-card w3-flat-wet-asphalt">
				<div id="titleContent">
					<h1>Book List</h1>
				</div>	
				<div id="divTopContent">
						<div id="searchNsort" class="">
						<form method="post" class="member.php">
							
							<input type="text" style="margin-right:1%;" name="iSearch" placeholder="Search books...">
							by
							<select>
								<option value="Title">Title</option>
								<option value="Author">Author</option>
								<option value="Publication Year">Publication Year</option>
								<option value="Publisher">Publisher</option>
							</select>
							<input class="" type="submit" value="SEARCH" name="iSubmit" style="margin-right:1%;">	
						</form>	
							<div style="float:right; margin-top:-28px;">
								<input  style="" id = "profile-btn" class="" type="submit" value="ADD BOOK" name="">				
							</div>				
						</div>
						
					
					
				</div>
				
			</div>
			<p style="margin-left:2%; color:slategray;"><?php echo $statusRegis?></p>
			<div class="w3-container" style="margin-bottom:10%;">
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
						//$query="select userID,name,role from user_data";
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
			<div id = "profile-modal" class = "w3-modal" style="margin-bottom:10%;">
				<div style="position:fixed;" class = "w3-display-topmiddle modal-content">
					<form method="POST" action="books.php">
						<h2>Update User Info</h2>
						<p>
							<input id="book_code" class="w3-input w3-border" name="book_code" type="text" placeholder="Book Code" required></p>
									
						<p>
							<input id="title" class="w3-input w3-border" name="title" type="text" placeholder="Title" required></p>
									
						<p>
							<input id="Author" class="w3-input w3-border" name="author" type="text" placeholder="Author" required></p>
									
						<p>
							<input id="Publication Year" class="w3-input w3-border" name="pubyear" type="text" placeholder="Publication Year" required></p>
									
						<p>
							<input id="Publisher" class="w3-input w3-border" name="publisher" type="text" placeholder="Publisher"></p>
									
						<p>
							<select name="category">
								<option value="Novel">Novel</option>
								<option value="Sains">Sains</option>
								<option value="Komik">Komik</option>
								<option value="Masakan">Masakan</option>
								<option value="Ekonomi">Ekonomi</option>
								<option value="Agama">Agama</option>
								<option value="Sejarah">Sejarah</option>
							</select></p>
						<p>
							<input type="submit" id="iReg" name="iAdd" class="w3-btn w3-black" value="Register"></p>
								<!-- <a class=""  href = "profile.php" id = "update-btn-modal" type = "submit">UPDATE</a> -->
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