<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$json_chuoi = '{"ten": "teo", "tuoi": 20, "dia chi": "ha dong"}';
$object = json_decode($json_chuoi, true);

echo $object["ten"]; 
echo "<br>";
echo $object["tuoi"]; 
echo "<br>";
echo $object["dia chi"]; 
    ?>
</body>
</html>