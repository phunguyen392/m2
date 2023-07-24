<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="">
        <input type="text" name="tim kiem">
        <input type="submit" id="submit" value="tim">
    </form>
    <?php
    $tu_dien = [
        "green" => "mau xanh",
        "blue" => "mau nuoc bien",
        "go" => "di",
        "yes" => "co",
        "no" => "khong"
    ];
    if ($_REQUEST["REQUEST_METHOD"] == "POST") {
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
        $tim = $_POST[$tim];
        foreach ($tu_dien as $green => $mauxanh) {
            echo $green . $mauxanh;
            echo "<br>";
        }
    }
    ?>
</body>

</html>