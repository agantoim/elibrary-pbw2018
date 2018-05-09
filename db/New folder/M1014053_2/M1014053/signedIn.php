<?php
    session_start();
    if(isset($_GET['submit'])){
        $cookie_value=$_SESSION['user'];
        session_unset();
        session_destroy();
        setcookie('username',$cookie_value,time()+(86400*30),"index.php");
        //86400=1day
        header("Location: index.php");
    }
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="get" >
        <?php
            //if(isset($_COOKIE["user"]))
            echo "Signed in. Welcome " . $_SESSION["user"];
       //else
            //echo "Cookie not found";
    
        ?>
        <br>
        <input type="submit" name="submit" value="BACK" > 
    
    </form>
</body>
</html>