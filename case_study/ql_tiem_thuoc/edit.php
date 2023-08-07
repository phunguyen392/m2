
<?php
  include '../db.php';

if( isset( $_GET['id'] ) ){
    $id = $_GET['id'];
}else{
    $id = 0;
}

$id = isset( $_GET['id'] ) ? $_GET['id'] : 0;

if( !$id ){
    header("Location: ql_tiem_thuoc/index.php");
}
$sql = "SELECT * FROM `ql_tiem_thuoc` WHERE id = $id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
// Lay ve du lieu duy nhat
$row = $stmt->fetch();
// echo '<pre>';
// print_r($row);
// die();

if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();
    // 
    $TEN_THUOC = $_REQUEST['TEN_THUOC'];
    $DON_VI = $_REQUEST['DON_VI'];
    $SO_LUONG = $_REQUEST['SO_LUONG'];
    $GIA_BAN= $_REQUEST['GIA_BAN'];
    $HAN_SU_DUNG = $_REQUEST['HAN_SU_DUNG'];

    $sql = "UPDATE `ql_tiem_thuoc` SET   `TEN_THUOC` = '$TEN_THUOC', `DON_VI` = '$DON_VI', `SO_LUONG` = '$SO_LUONG',  `GIA_BAN` = '$GIA_BAN', `HAN_SU_DUNG` = '$HAN_SU_DUNG' WHERE `id` = $id";
     
    //Thuc hien truy van
     $conn->exec($sql);

     // chuyen huong ve trang danh sach
     header("Location: ../index.php");
}


?>

<h2 style="text-align: center;">SỬA</h2>

<form action="" method="POST" >
  <label for="fname">TÊN LOẠI THUỐC</label><br>
  <input type="text"  name="TEN_THUOC" value="<?= $row['TEN_THUOC'];?>"><br>
  <label for="lname">ĐƠN VỊ</label><br>
  <input type="text"  name="DON_VI" value="<?= $row['DON_VI'];?>" ><br><br>
  <label for="lname">SỐ LƯỢNG</label><br>
  <input type="number"  name="SO_LUONG" value="<?= $row['SO_LUONG'];?>"><br><br>
  <label for="lname">GIÁ BÁN</label><br>
  <input type="number"  name="GIA_BAN" value="<?= $row['GIA_BAN'];?>"><br><br>
  <label for="lname">HẠN SỬ DỤNG</label><br>
  <input type="date"  name="HAN_SU_DUNG" value="<?= $row['HAN_SU_DUNG'];?>"><br><br>
 
  <input type="submit" value="Submit">
</form>