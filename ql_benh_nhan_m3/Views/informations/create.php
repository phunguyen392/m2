<?php
?>
<form action="index.php?controller=information&action=store" method="post">
    NGÀY NHẬP VIỆN:<br><input type="date" name="ngay_nhap_vien"> <br>
    GIỚI TÍNH:<br> <input type="text" name="gioi_tinh"> <br><br>
    TÌNH TRẠNG:<br><input type="text" name="tinh_trang"> <br>
    THÔNG TIN:<br> <input type="text" name="thong_tin"> <br><br>

        <button type="submit" value="THÊM">THÊM</button>
        <button> <a href="index.php?controller=information&action=index">QUAY LẠI</a></button>

</form>