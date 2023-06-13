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
        $_SESSION["favcolor"]="Yellow";
        $_SESSION["favanimal"]="Cat";
    ?>
    Session variables set 
    <a href="s2.php">Click Here</a>
</body>
</html>