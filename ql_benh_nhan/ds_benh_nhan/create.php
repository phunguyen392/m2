<?php
include_once '../db.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // echo '<pre>';
    // print_r($_REQUEST);
    // die();
    $ten = $_REQUEST['ten'];
    $phong = $_REQUEST['phong'];
    $ngay_nhap_vien = $_REQUEST['ngay_nhap_vien'];
    $gioi_tinh = $_REQUEST['gioi_tinh'];
    $tinh_trang = $_REQUEST['tinh_trang'];
    $thong_tin_bn = $_REQUEST['thong_tin_bn'];





    $sql = "INSERT INTO `ds_benh_nhan` 
    ( `ten`,`phong`, `ngay_nhap_vien`, `gioi_tinh`, `tinh_trang`, `thong_tin_bn`) 
    VALUES 
    ('$ten','$phong','$ngay_nhap_vien','$gioi_tinh','$tinh_trang','$thong_tin_bn')";
    //Thuc hien truy van
    $conn->exec($sql);

    // echo($sql);
    // die();

     // chuyen huong ve trang danh sach
     header("Location: index.php");
}

?>

<!-- End of Sidebar -->
<style>
    h2 {
        text-align: center;
        color: blue;
    }

    form {
        text-align: center;
    }
</style>
<!-- Content Wrapper -->

    <!-- Main Content -->
    <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
        <br>
        <h2>THÊM BỆNH NHÂN MỚI</h2>

        <form action="" method="POST">
            <label for="fname">TÊN</label><br>
            <input type="text" name="ten"><br>

            <label for="fname">PHÒNG</label><br>
            <input type="number" name="phong"><br><br>

            <label for="fname">NGÀY NHẬP VIỆN</label><br>
            <input type="date" name="ngay_nhap_vien"><br><br>

            <label for="fname">GIỚI TÍNH</label><br>
            <input type="text" name="gioi_tinh"><br><br>

            <label for="fname">TÌNH TRẠNG BỆNH NHÂN</label><br>
            <input type="text" name="tinh_trang"><br><br>

            <label for="fname">THÔNG TIN BỆNH NHÂN</label><br>
            <input type="text" name="thong_tin_bn"><br><br>

            <input type="submit" value="NHẬP BỆNH NHÂN">


        </form>






    </div>
    <!-- End of Main Content -->

    <!-- Footer -->

    <!-- End of Footer -->