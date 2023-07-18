<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$dien_thoai = [
    ["sam sung","galaxy"],
    ["apple", "iphone"],
    ["oppo", "renno"],
    ["sony", "xperia"]
];

echo "<table border = 1>" ;
for ($row = 0; $row < 4; $row++) {
    echo "<tr>";

    for ($col = 0; $col < 2; $col++) {
        echo "<td>".$dien_thoai[$row][$col]."</td>";
    }
    echo "</tr>";
};


?>
</body>
</html>