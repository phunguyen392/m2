<?php
  include '../db.php';
  if ($_SERVER['REQUEST_METHOD']=="POST"){
    // echo '<pre>';
    // print_r ($_REQUEST);
    // die();
    $TEN_THUOC = $_REQUEST['TEN_THUOC'];
    $DON_VI = $_REQUEST['DON_VI'];
    $SO_LUONG = $_REQUEST['SO_LUONG'];
    $GIA_BAN = $_REQUEST['GIA_BAN'];
    $HAN_SU_DUNG = $_REQUEST['HAN_SU_DUNG'];
   

    $sql = "INSERT INTO `ql_tiem_thuoc` 
    (  `TEN_THUOC`,`DON_VI`,`SO_LUONG`,`GIA_BAN`,`HAN_SU_DUNG`) 
    VALUES 
    ('$TEN_THUOC','$DON_VI','$SO_LUONG','$GIA_BAN','$HAN_SU_DUNG')";
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
  <input type="text" name="DON_VI" ><br>
  <label for="fname">SỐ LƯỢNG</label><br>
  <input type="text" name="SO_LUONG" ><br>
  <label for="fname">GIÁ BÁN</label><br>
  <input type="text" name="GIA_BAN" ><br>
  <label for="fname">HẠN SỬ DỤNG</label><br>
  <input type="text" name="HAN_SU_DUNG" ><br>

  <input type="submit" value="Thực hiện">




</form> 
<br>




</body>
</html>
