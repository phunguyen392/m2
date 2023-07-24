<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        Ten nguoi dung:<br>
        <input type="text" name="ten_nguoi_dung" value=""><br>
        Email:<br>
        <input type="email" name="email" value=""><br>
        So dien thoai:<br>
        <input type="number" name="so_dien_thoai" value=""><br>
        <button type="submit">gui</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // in du lieu nguoi dung gui len

        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
        // gan vao bien
        $ten_nguoi_dung = $_REQUEST["ten_nguoi_dung"];
        $email = $_REQUEST["email"];
        $so_dien_thoai = $_REQUEST["so_dien_thoai"];
        // xu ly
        if (empty($email || $ten_nguoi_dung || $so_dien_thoai)) {
            echo "khong trong email ten va sdt <br>";
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Địa chỉ  email  hợp lệ";
            } else {
                echo "Địa chỉ email không hợp lệ";
            }
        }
    }

    $filename = 'users.json';
    function saveDataJSON($filename, $ten_nguoi_dung, $email, $so_dien_thoai)
    {
        try {
            // Lấy dữ liệu từ file JSON
            $json = file_get_contents($filename);

            // Chuyển đổi dữ liệu từ JSON sang mảng PHP
            $data = json_decode($json);

            // Tạo một mảng mới chứa thông tin liên hệ
            $contact = array(
                'name' => $ten_nguoi_dung,
                'email' => $email,
                'phone' => $so_dien_thoai
            );

            // Thêm thông tin mới vào mảng gốc
            array_push($data, $contact);

            // Chuyển đổi mảng dữ liệu sang JSON
            $json = json_encode($data);

            // Lưu dữ liệu vào file JSON
            file_put_contents($filename, $json);

            return true;
        } catch (Exception $e) {
            // Xử lý lỗi nếu có
            echo 'Lỗi: ' . $e->getMessage();
            return false;
        }
    }





    ?>
</body>

</html>