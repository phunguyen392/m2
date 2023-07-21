<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
try {
    // Một số đoạn mã có thể gây ra lỗi hoặc ngoại lệ
    $kq =  1/0; 
} catch (Exception $e) {
    // Xử lý ngoại lệ
    echo "Có lỗi xảy ra: "  . $e->getMessage();
}
echo "ket qua la: ". $kq;
?>
</body>
</html>