<?php
include_once '../db.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // echo '<pre>';
  // print_r ($_REQUEST);
  // die();
  $nsx = $_REQUEST['nsx'];
  $so_luong = $_REQUEST['so_luong'];
  $ngay_thang = $_REQUEST['ngay_thang'];




  $sql = "INSERT INTO `don_hangs` 
    ( `nsx`,`so_luong`, `ngay_thang`) 
    VALUES 
    ('$nsx','$so_luong','$ngay_thang')";
  //Thuc hien truy van
  $conn->exec($sql);

  // echo($sql);
  // die();

  // chuyen huong ve trang danh sach
  header("Location: index.php");
}

?>
<?php
include '../include/header.php';
include '../include/sidebar.php';

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
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">
    <br>
    <h2>THÊM HÓA ĐƠN</h2>

    <form action="" method="POST">
      <label for="fname">NHÀ CUNG CẤP</label><br>
      <input type="text" name="nsx"><br>
      <label for="fname">SỐ LƯỢNG</label><br>
      <input type="number" name="so_luong"><br><br>

      <label for="fname">NGÀY THÁNG</label><br>
      <input type="date" name="ngay_thang"><br><br>



      <input type="submit" value="THỰC HIỆN">
    </form>






  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <?php
  include '../include/footer.php';
  ?>
  <!-- End of Footer -->