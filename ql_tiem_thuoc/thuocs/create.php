
<?php
include_once '../db.php';


$sql = "SELECT thuocs.*, danh_muc_thuoc.name , don_hangs.nsx , danh_muc_thuoc.id as danhmucthuoc_id, don_hangs.id as donhang_id
        FROM thuocs
        JOIN danh_muc_thuoc ON thuocs.thuoc_id = danh_muc_thuoc.id
        JOIN don_hangs ON thuocs.nha_cung_cap = don_hangs.id";




$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();

// Tiếp tục xử lý và hiển thị dữ liệu


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $ten_thuoc = $_REQUEST['ten_thuoc'];
  $so_luong = $_REQUEST['so_luong'];
  $don_gia = $_REQUEST['don_gia'];
  $nha_cung_cap = $_REQUEST['nha_cung_cap'];
  $thuoc_id = $_REQUEST['thuoc_id'];
  try{ 
  
  $sql = "INSERT INTO `thuocs`
 ( `ten_thuoc`,`so_luong`, `don_gia`, `nha_cung_cap`, `thuoc_id`) 
    VALUES 
    ('$ten_thuoc','$so_luong','$don_gia','$nha_cung_cap','$thuoc_id')";



$conn->exec($sql);


// chuyen huong vê trang chủ
header("Location: index.php");
}
catch(PDOException $e ){
  echo "loi trung ten". $e ->getMessage();
}
}

include '../include/header.php';
include '../include/sidebar.php';
?>
<style>

h2{
  text-align: center;
  color: blue;
}
form{
  text-align: center;
  color: green;
}
  </style>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <br>
    <h2>THÊM THUỐC</h2>
    <form action="" method="POST">
      <label for="fname">TÊN LOẠI THUỐC</label><br>
      <input type="text" name="ten_thuoc"><br>
      <label for="lname">SỐ LƯỢNG</label><br>
      <input type="number" name="so_luong"><br><br>
      <label for="lname">ĐƠN GIÁ</label><br>
      <input type="number" name="don_gia"><br><br>

      
      <label for="lname">Nhà cung cấp</label><br>
      <select name="nha_cung_cap">
        <?php foreach ($rows as $row) : ?>
          <option value="<?php echo $row['donhang_id']; ?>"><?php echo $row['nsx']; ?></option>
        <?php endforeach; ?>
      </select><br><br>
     
     
     
     
      <label for="lname">Danh mục thuốc</label><br>
      <select name="thuoc_id">
        <?php foreach ($rows as $row) : ?>
          <option value="<?php echo $row['danhmucthuoc_id']; ?>"><?php echo $row['name']; ?></option>
        <?php endforeach; ?>
      </select><br><br>

      
      <input type="submit" value="THỰC HIỆN">
    </form>
  </div>
  <!-- End of Main Content -->
  <!-- Footer -->
  <?php
  include '../include/footer.php';
  ?>
  <!-- End of Footer -->
