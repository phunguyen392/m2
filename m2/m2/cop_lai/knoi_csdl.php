<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy thông tin từ form
    $db_name = $_POST['db_name'];
    $server_name = $_POST['server_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Tạo kết nối đến MySQL
    $conn = mysqli_connect($server_name, $username, $password, $db_name);
    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    // Tạo cơ sở dữ liệu mới
    $sql = "CREATE DATABASE $db_name";
    if (mysqli_query($conn, $sql)) {
        echo "Tạo cơ sở dữ liệu thành công";
    } else {
        echo "Lỗi khi tạo cơ sở dữ liệu: " . mysqli_error($conn);
    }
    // Đóng kết nối
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Thêm cơ sở dữ liệu mới</title>
</head>

<body>
    <form method="post" action="">
        <label for="db_name">Tên cơ sở dữ liệu:</label><br>
        <input type="text" id="db_name" name="db_name"><br>
        <label for="server_name">Tên máy chủ:</label><br>
        <input type="text" id="server_name" name="server_name"><br>
        <label for="username">Tên đăng nhập:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Mật khẩu:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Thêm cơ sở dữ liệu">

    </form>
</body>

</html>