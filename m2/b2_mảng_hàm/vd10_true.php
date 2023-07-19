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
$array = json_decode($json_chuoi, true);
echo "<pre>";
print_r($array);
echo "</pre>";
?>
</body>
</html>