
    <?php
try {
    // Một số đoạn mã có thể gây ra lỗi hoặc ngoại lệ
    $kq =  1/0; 
    // $kq = sqrt(-9);
} catch (Exception $e) {
    // Xử lý ngoại lệ
    echo "Có lỗi xảy ra: "  . $e->getMessage();
}
echo "ket qua la: ". $kq;


