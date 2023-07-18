<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    luong_tien_ban_dau:<br>
<input type="number" name="luong_tien_ban_dau" value=""><br>
lai_suat_nam:<br>
<input type="number" name="lai_suat_nam" value=""><br>
so_nam_dau_tu:<br>
<input type="number" name="so_nam_dau_tu" value=""> <br>
<button type="submit"> gui</button>
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "<pre>";
print_r($_REQUEST);
echo "<pre>";

    $luong_tien_ban_dau = $_REQUEST["luong_tien_ban_dau"];
    $lai_suat_nam = $_REQUEST["lai_suat_nam"];
    $so_nam_dau_tu = $_REQUEST["so_nam_dau_tu"];
    $gia_tri_tuong_lai = $luong_tien_ban_dau ($luong_tien_ban_dau * $lai_suat_nam);
}

?>
</body>
</html>