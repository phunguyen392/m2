<!DOCTYPE html>
<html>
<head>
	<title>xu ly form</title>
</head>
<body>
	<form action="lon3.php" method="GET">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br>

		<input type="submit" value="Submit">
	</form>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Lấy giá trị từ biểu mẫu
    $name = $_GET['name'] ;
    $email = $_GET['email'] ;

    // Kiểm tra xem các trường đã được điền đầy đủ hay chưa
    if (empty($name) || empty($email)) {
        echo 'Vui lòng điền đầy đủ thông tin';
    } else {
        echo 'Dữ liệu của bạn đã được gửi thành công';
    }
}
?>
</body>
</html>