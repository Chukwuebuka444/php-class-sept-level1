<?php
$services = [ "front end" => ["price" =>"2000", "language" => "js"],
           "back end" => ["price" =>"2000", "language" => "js"] ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?php echo array_keys($services)[0].$services["front end"] ?></div>
    <div><?php foreach($services as $service => $value){
      echo "<h1>$service  => $value<h1/>"."<br/>";


    } ?></div>
    <?php 
    foreach($services as $key => $value){
        echo "<h1>$key</h1>";
        foreach($value as $key => $element){
            echo $element;
        }
    }
    ?>
</body>
</html>