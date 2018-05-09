<?php
    session_start();
    if(isset($_POST['fsub'])){
        $_SESSION['user']=$_POST['fname'];
        echo $_SESSION['user'];
        header("Location: signedIn.php");
    }
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post" action="index.php" >
		<fieldset>
			<legend>Login</legend>
			<input type="text" name="fname" placeholder="username" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>">
            <br>
            <br>
            <input type="password" name="fpass" placeholder="password">
            <br>

            <br>
			<input type="submit" name="fsub" value="LOGIN" style="float:right">
		</fieldset>
	</form>
</body>
</html>