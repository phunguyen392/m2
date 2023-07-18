<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="vd_form_get.php">
        <input type="text" name="name" value="" placeholder="nhập tên hoặc email"><br>
        <input type="password" name="password" value="" placeholder="nhập mật khẩu"><br>

        <input type="submit" value="gửi">
    </form>

    <?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["name"];
    $password = $_GET["password"];

    if (empty($password || $name)) {
        echo "vui lòng điền tên đăng nhập hoặc mật khẩu";

    } else {
        echo "dữ liệu của bạn đã được gửi thành công";
    }
}
    ?>






</body>

</html>