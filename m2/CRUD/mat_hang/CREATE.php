  <?php
  include '../db.php';
  if ($_SERVER['REQUEST_METHOD']=="POST"){
    echo '<pre>';
    // print_r ($_REQUEST);
    // die();
    $TENHANG = $_REQUEST['TENHANG'];
    $MACONGTY = $_REQUEST['MACONGTY'];
    $MALOAIHANG = $_REQUEST['MALOAIHANG'];
    $SOLUONG = $_REQUEST['SOLUONG'];
    $DONVITINH = $_REQUEST['DONVITINH'];
    $GIAHANG = $_REQUEST['GIAHANG'];


    $sql = "INSERT INTO `mat_hangs` 
    ( `TENHANG`, `MACONGTY`, `MALOAIHANG`, `GIAHANG`,`DONVITINH`,`SOLUONG`) 
    VALUES 
    ('$TENHANG','$MACONGTY','$MALOAIHANG','$GIAHANG','$DONVITINH','$SOLUONG')";
     //Thuc hien truy van
    $conn->exec($sql);

    // chuyen huong ve trang danh sach
    header("Location: index.php");

  }
  ?>

  <!DOCTYPE html>
<html>
<body>

<h2>THEM MAT HANG</h2>

<form method='POST' action= "">
  <label for="fname">tenhang</label><br>
  <input type="text" name="TENHANG" ><br>
  <label for="lname">macongty</label><br>
  <input type="number"  name="MACONGTY" ><br>
  <label for="fname">maloaihang</label><br>
  <input type="number" name="MALOAIHANG" ><br>
  <label for="lname">soluong</label><br>
  <input type="number"  name="SOLUONG" ><br>
  <label for="number">donvitinh</label><br>
  <input type="text" name="DONVITINH" ><br>
  <label for="number">giahang</label><br>
  <input type="number"  name="GIAHANG" ><br>
  <input type="submit" value="Submit">




</form> 





</body>
</html>
