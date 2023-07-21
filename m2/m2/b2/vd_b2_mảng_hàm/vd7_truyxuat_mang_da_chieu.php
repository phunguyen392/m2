<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = [
    [21,23,45,65],
    [12,32,54,56],
    [98,89,76,67]
];
sort($a);
echo "<pre>";
print_r($a);
echo "<?pre>";
// for ($i=0; $i < count($a); $i ++){
//     for($j=0; $j < count($a[0]); $j++){
//         echo $a [$i][$j];
//         echo "<br>";
//     }
// }

    ?>
</body>
</html>