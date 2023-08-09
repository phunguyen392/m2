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
$sql = "SELECT * FROM `danh_muc_thuoc` WHERE id  = $id";
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
    $name = $_REQUEST['name'];
  

    $sql = "UPDATE `danh_muc_thuoc` SET`name`= '$name' WHERE `id` = $id";
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
  table {
    width: 100%;
    border-collapse: collapse;

  }
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
</style>



<h2>THÊM danh muc THUỐC</h2>

<form action="" method="POST" >
    <label for="fname">danh muc</label><br>
    <input type="text"  name="name" value="<?= $row['name'];?>"><br>
   
 



  <input type="submit" value="THỰC HIỆN">
</form> 


<?php 
                 include '../include/footer.php';
           ?>