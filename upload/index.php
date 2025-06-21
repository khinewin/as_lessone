<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myFile" placeholder="Select File to Upload">
        <button type="submit">Upload</button>
    </form>

    <?php
        $d=scandir("data");
        $i=2;
        $length=count($d);
    
        for($i; $i<$length; $i++){
            $name=$d[$i];
           ?>
           <a href="data/<?php echo $name ?>"><?php echo $name; ?></a>
           <?php
        }
    ?>
    
</body>
</html>