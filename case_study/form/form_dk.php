<?php
// Kiểm tra xem có dữ liệu được gửi từ form hay không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị từ form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kiểm tra nếu username và password hợp lệ
    if ($username === "admin" && $password === "matkhau") {
        // Đăng nhập thành công
        echo "Đăng nhập thành công!";
        // Thực hiện các thao tác sau khi đăng nhập thành công
        // Ví dụ: chuyển hướng đến trang chính, lưu thông tin session, ...

    } else {
        // Đăng nhập thất bại
        echo "Tên đăng nhập hoặc mật khẩu không chính xác!";
        // Có thể thực hiện các xử lý khác khi đăng nhập thất bại
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method="POST" action="">
        <div>
            <label>Tên đăng nhập:</label><br>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Mật khẩu:</label><br>
            <input type="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Đăng nhập">
        </div>
    </form>
</body>
</html>