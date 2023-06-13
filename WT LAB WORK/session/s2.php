<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo"<h3>BEFORE CHANGING VALUES</h3>Favourite color : ".$_SESSION["favcolor"];
        echo"<br>Favourite animal : ".$_SESSION["favanimal"];
        $_SESSION['favcolor']="YELLOVE";
        $_SESSION['favanimal']="Lions";
        echo"<br><br><h3>AFTER CHANGING VALUES</h3>Favourite color : ".$_SESSION["favcolor"];
        echo"<br>Favourite animal : ".$_SESSION["favanimal"];
    ?>
    <br><br>
    <a href="session_destroy.php"><button>End Session</button></a>
</body>
</html>