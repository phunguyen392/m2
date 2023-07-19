<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name= "search">
        <button type="submit">tim</button>
    </form>
<?php
$tu_dien = [
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển vở",
    "computer" => "máy tính"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tim_kiem = $_POST["search"];
    $flag = 0;
    foreach ($tu_dien as $tieng_anh => $tieng_viet) {
        if ($tieng_anh == $tim_kiem) {
            echo "Từ: " . $tieng_anh . ". <br/>Nghĩa của từ: " . $tieng_viet;
            $flag = 1;
            break;
        }
    }

    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra.";
    }
}
?>
</body>
</html>