<?php
  include '../db.php';
  if ($_SERVER['REQUEST_METHOD']=="POST"){
    // echo '<pre>';
    // print_r ($_REQUEST);
    // die();
    $TEN_THUOC = $_REQUEST['TEN_THUOC'];
    $TONG_SO_LUONG = $_REQUEST['TONG_SO_LUONG'];
    $MA_LOAI_THUOC_id = $_REQUEST['MA_LOAI_THUOC_id'];
    $MO_TA = $_REQUEST['MO_TA'];
   

    $sql = "INSERT INTO `chi_tiet_loai_thuoc` 
    (  `TEN_THUOC`,`TONG_SO_LUONG`,`MA_LOAI_THUOC_id`,`MO_TA`) 
    VALUES 
    ('$TEN_THUOC','$TONG_SO_LUONG','$MA_LOAI_THUOC_id','$MO_TA')";
     //Thuc hien truy van
    $conn->exec($sql);

    // chuyen huong ve trang danh sach
    header("Location: ../index.php");

  }
  ?>

  <!DOCTYPE html>
<html>
<body>

<h2>THÊM LOẠI THUỐC</h2>

<form method='POST' action= "">
  <label for="fname">TÊN LOẠI THUỐC</label><br>
  <input type="text" name="TEN_THUOC" ><br>
  <label for="fname">ĐƠN VỊ</label><br>
  <input type="text" name="TONG_SO_LUONG" ><br>
  <label for="fname">SỐ LƯỢNG</label><br>
  <input type="text" name="MA_LOAI_THUOC_id" ><br>
  <label for="fname">GIÁ BÁN</label><br>
  <input type="text" name="MO_TA" ><br>

  <input type="submit" value="Thực hiện">




</form> 
<br>




</body>
</html>
