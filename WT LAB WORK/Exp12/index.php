<?php 
    if(isset($_FILES["xyz"])){
        echo"<pre>".
            print_r($_FILES)
            ."</pre>";

        $file_name = $_FILES['xyz']['name'];
        $file_path = $_FILES['xyz']['full_path'];
        $file_type = $_FILES['xyz']['type'];
        $file_tmp = $_FILES['xyz']['tmp_name'];

        move_uploaded_file($file_tmp,"upload/".$file_name);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="POST">
        <input type="file" name="xyz">
        <input type="submit">
    </form>
</body>
</html>