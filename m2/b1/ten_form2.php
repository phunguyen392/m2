<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$name = 'NVA';
echo '<pre>';

if($_SERVER['REQUEST_METHOD'] == 'POST' )  ;
echo '<pre>';
print_r($_REQUEST)
$ho_va_ten = $_REQUEST['ho_va_ten']
$mat_khau = $_REQUEST ['mat khau']
    ?>
<form method="POST" action="lon.php">
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

   
</body>

</html>