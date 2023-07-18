<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="lon_post1.php">
        <label for="name">Tên:<br>
            <input type="text" id="name" name="name" placeholder="nhập tên tài khoản"><br>
        </label>
        <label for="email">Email:<br>
            <input type="email" id="email" name="email" placeholder="nhập email"><br>
        </label>
        <label for="password">Mật khẩu:<br>

            <input type="password" name="password" value="" placeholder="nhập mật khẩu"><br>
        </label>

        <button type="submit">Gửi</button>
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if (empty($password && $name && $email)) {
            echo "vui lòng điền đầy đủ thông tin";

        } else {
            echo "dữ liệu của bạn đã được gửi thành công";
        }
    }
        

    ?>

</body>

</html>