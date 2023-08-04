<?php
// Thông tin kết nối
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo_pdo";
// Tạo kết nối đến CSDL
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
    // Thiết lập chế độ lỗi và ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
} catch(PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}
$sql = "INSERT INTO `custormers`(`fullname`, `age`, `address`) VALUES ('LON','17','DH')";
$conn->query($sql);




















