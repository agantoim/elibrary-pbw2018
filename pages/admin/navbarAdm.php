        <div id="topbar" class="w3-bar w3-light-grey w3-card w3-border">
			<a href="../general/logout.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-sign-in"></i></a>
			<a href="../general/profile.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-user"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-envelope"></i></a>
			<a href="../general/news.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-newspaper-o"></i></a>
			<a href="../admin/adm.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-home"></i></a>
			<p style="margin-bottom: 0px; margin-top: 5px; margin-left: 1%;">You are login as <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?></p>
        </div>