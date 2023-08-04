<?php
  include '../db.php';
  if ($_SERVER['REQUEST_METHOD']=="POST"){
    // echo '<pre>';
    // print_r ($_REQUEST);
    // die();
    $TENLOAIHANG = $_REQUEST['TENLOAIHANG'];
   

    $sql = "INSERT INTO `loaihangs` 
    (  `TENLOAIHANG`) 
    VALUES 
    ('$TENLOAIHANG')";
     //Thuc hien truy van
    $conn->exec($sql);

    // chuyen huong ve trang danh sach
    header("Location: index.php");

  }
  ?>

  <!DOCTYPE html>
<html>
<body>

<h2>THEM LOAI HANG</h2>

<form method='POST' action= "">
  <label for="fname">TENLOAIHANG</label><br>
  <input type="text" name="TENLOAIHANG" ><br>
  
  <input type="submit" value="Submit">




</form> 





</body>
</html>
