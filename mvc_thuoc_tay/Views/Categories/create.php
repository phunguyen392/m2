<?php
// echo '<br>'.__FILE__;
?>
<form action="index.php?action=store" method="post">
    TÊN DANH MỤC THUỐC :<br>
    <input type="text" name="name"> <br>
    NGÀY NHẬP:<br> <input type="text" name="created_at"> <br>
    NGÀY CẬP NHẬT :<br><input type="text" name="updated_at"> <br>
    HÌNH ẢNH:<br> <input type="text" name="image_url"> <br>
    <input type="submit" value="THÊM">
</form>