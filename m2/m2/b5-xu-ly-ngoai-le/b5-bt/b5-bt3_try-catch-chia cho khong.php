
    <?php
    function test_ngoai_le($a)
    {
        if ($a >= 0) {
           return $a;
        }
        else if($a<0) {
            return $a;
           
        }
        else{
            throw new Exception("cu phap khong dung");
            
        }
    }

    try {
        $kq =  test_ngoai_le(sqrt(4));

        echo "ket qua la: " . $kq;
    } catch (Exception $e) {
        // Xử lý ngoại lệ
        echo "Có lỗi : "  . $e->getMessage();
    }
