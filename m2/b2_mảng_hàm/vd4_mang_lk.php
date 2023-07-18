<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$xe = ["yamaha" => "sirius", "honda" => "wave", "piaggio" => "vespa", "suzuki" => "xipo"];
// echo $xe["piaggio"];
foreach ($xe as $yamaha => $sirius) {
    echo "hang xe ".$yamaha . " co loai " . $sirius . "...";
    echo "<br>";
}
?>
</body>
</html>