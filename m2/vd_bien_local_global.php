<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = 5;
function goi_bien(){
    global $a;
    echo $a;
}
goi_bien();


?>
</body>
</html>