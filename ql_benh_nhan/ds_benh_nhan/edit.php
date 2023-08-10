<?php
include_once '../db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

$id = isset($_GET['id']) ? $_GET['id'] : 0;


$sql = "SELECT * FROM `ds_benh_nhan` WHERE id  = $id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC); //array 
// Lay ve du lieu duy nhat
$row = $stmt->fetch();
// echo '<pre>';
// print_r($row);
// die();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();
    // 
    $ten = $_REQUEST['ten'];
    $phong = $_REQUEST['phong'];
    $ngay_nhap_vien = $_REQUEST['ngay_nhap_vien'];
    $gioi_tinh = $_REQUEST['gioi_tinh'];
    $tinh_trang = $_REQUEST['tinh_trang'];
    $thong_tin_bn = $_REQUEST['thong_tin_bn'];



    $sql = "UPDATE `ds_benh_nhan` SET`ten`= '$ten',`phong` = '$phong',`ngay_nhap_vien` = '$ngay_nhap_vien',`gioi_tinh` = '$gioi_tinh',`tinh_trang` = '$tinh_trang', `thong_tin_bn` = '$thong_tin_bn' WHERE `id` = $id";
    //Thuc hien truy van
    $conn->exec($sql);

    // chuyen huong ve trang danh sach
    header("Location: index.php");
}


?>




<style>
    th,
    td {
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

    form {
        text-align: center;
        color: green;
    }

    input {
        text-align: center;
        color: blueviolet;
    }
</style>


<br><br>
<h2>SỬA HÓA ĐƠN</h2>

<form action="" method="POST">
    <label for="fname">TÊN</label><br>
    <input type="text" name="ten" value="<?= $row['ten']; ?>"><br>

    <label for="fname">PHÒNG</label><br>
    <input type="number" name="phong" value="<?= $row['phong']; ?>"><br>

    <label for="fname">NGÀY NHẬP VIỆN</label><br>
    <input type="date" name="ngay_nhap_vien" value="<?= $row['ngay_nhap_vien']; ?>"><br><br>

    <label for="fname">GIỚI TÍNH</label><br>
    <input type="text" name="gioi_tinh" value="<?= $row['gioi_tinh']; ?>"><br><br>

    <label for="fname">TÌNH TRẠNG</label><br>
    <input type="text" name="tinh_trang" value="<?= $row['tinh_trang']; ?>"><br><br>

    <label for="fname">THÔNG TIN BỆNH NHÂN</label><br>
    <input type="text" name="thong_tin_bn" value="<?= $row['thong_tin_bn']; ?>"><br><br>


    <input type="submit" value="SỬA BỆNH NHÂN">
</form>