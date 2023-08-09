<?php
include_once '../db.php';
if( isset( $_GET['id'] ) ){
    $id = $_GET['id'];
}else{
    $id = 0;
}

$id = isset( $_GET['id'] ) ? $_GET['id'] : 0;

if( !$id ){
    header("Location: index.php");
}
$sql = "SELECT * FROM `don_hangs` WHERE id  = $id";
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
    $nsx = $_REQUEST['nsx'];
    $so_luong = $_REQUEST['so_luong'];
    $ngay_thang = $_REQUEST['ngay_thang'];
  

    $sql = "UPDATE `don_hangs` SET`nsx`= '$nsx',`so_luong` =  '$so_luong',`ngay_thang` = '$ngay_thang' WHERE `id` = $id";
     //Thuc hien truy van
     $conn->exec($sql);

     // chuyen huong ve trang danh sach
     header("Location: index.php");
}


?>


<?php
      include '../include/header.php';
      include '../include/sidebar.php';

      ?>

<style>
 
  th, td {
    border: 5px solid #ddd;
    padding: 20px;
    text-align: center;
  }
  th {
    background: linear-gradient(to bottom, #F2F2F2, #ddd);
    color: #333;
  }
  tr:nth-child(even) {
    background: linear-gradient(to bottom, #F2F2F2, #F9F9F9);
  }
  tr:hover {
    background: linear-gradient(to bottom, #ddd, #F2F2F2);
  }
  h2 {
    text-align: center;
    color: #007BFF;
  }
  a {
    text-decoration: none;
    color: #007BFF;
  }
  a:hover {
    color: #0056B3;
  }
  form{
    text-align: center;
    color: green;
  }
  input{
    text-align: center;
    color: blueviolet;
  }
</style>


<br><br>
<h2>SỬA HÓA ĐƠN</h2>

<form action="" method="POST" >
    <label for="fname">NHÀ CUNG CẤP</label><br>
    <input type="text"  name="nsx" value="<?= $row['nsx'];?>"><br>
    <label for="fname">SỐ LƯỢNG</label><br>
    <input type="text"  name="so_luong" value="<?= $row['so_luong'];?>"><br>
    <label for="fname">NGÀY THÁNG</label><br>
    <input type="text"  name="ngay_thang" value="<?= $row['ngay_thang'];?>"><br><br>
 



  <input type="submit" value="THỰC HIỆN">
</form> 


<?php 
                 include '../include/footer.php';
           ?>