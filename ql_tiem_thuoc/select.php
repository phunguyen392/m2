

$sql = "SELECT * FROM `danh_muc_thuoc`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();





$sql = "INSERT INTO `thuocs`
    (`ten_thuoc`, `so_luong`, `don_gia`, `nsx`, `name`)
    VALUES
    ('$ten_thuoc', '$so_luong', '$don_gia' , '$nha_cung_cap', '$thuoc_id')";



  <?php include_once '../db.php';
$sql = "SELECT * FROM `danh_muc_thuoc`"; // $sql = "SELECT thuocs.*, danh_muc_thuoc.name as danh_muc_name // FROM thuocs // INNER JOIN danh_muc_thuoc ON danh_muc_thuoc.id = thuocs.thuoc_id"; // Truy vấn $stmt = $conn->query($sql); // Thiết lập kiểu dữ liệu trả về $stmt->setFetchMode(PDO::FETCH_ASSOC); //array // Trả về dữ liệu $rows = $stmt->fetchAll(); if ($_SERVER['REQUEST_METHOD'] == "POST") { // echo '<pre>'; // print_r ($_REQUEST); // die(); $ten_thuoc = $_REQUEST['ten_thuoc']; $so_luong = $_REQUEST['so_luong']; $don_gia = $_REQUEST['don_gia']; $nha_cung_cap = $_REQUEST['nha_cung_cap']; $thuoc_id = $_REQUEST['thuoc_id']; $sql = "INSERT INTO `thuocs` ( `ten_thuoc`, `so_luong`, `don_gia`,`nha_cung_cap`,`thuoc_id`) VALUES ('$ten_thuoc','$so_luong','$don_gia','$nha_cung_cap','$thuoc_id')"; //Thuc hien truy van $conn->exec($sql); // chuyen huong ve trang danh sach header("Location: index.php"); } 
?> <?php include '../include/header.php';
    include '../include/sidebar.php'; ?> <!-- End of Sidebar -->
<style>
  h2 {
    text-align: center;
    color: blue;
  }

  form {
    text-align: center;
    color: green;
  }
</style> <!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column"> <!-- Main Content -->
  <div id="content"> <br>
    <h2>THÊM THUỐC</h2>

    <form action="" method="POST">
      <label for="fname">TÊN LOẠI THUỐC</label><br>
      <input type="text" name="ten_thuoc"><br>
      <label for="lname">SỐ LƯỢNG</label><br>
      <input type="number" name="so_luong"><br><br>
      <label for="lname">ĐƠN GIÁ</label><br>
      <input type="number" name="don_gia"><br><br>

      <label for="lname">nha cung cap</label><br>
      <input type="number" name="nha_cung_cap"><br><br>



      <label for="lname">danh muc thuoc</label><br>


      <select name="thuoc_id">
         <?php foreach ($rows as $row) : ?>
           <option value="<?php echo $row['id']; ?>">
            <?php echo $row['name']; ?></option> <?php endforeach; ?>
           </select><br><br>

      <input type="submit" value="THỰC HIỆN">
    </form>
  </div> <!-- End of Main Content --> <!-- Footer --> <?php include '../include/footer.php'; ?> <!-- End of Footer -->





























    <?php
include_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $ten_thuoc = $_POST['ten_thuoc'];
  $so_luong = $_POST['so_luong'];
  $don_gia = $_POST['don_gia'];
  $nha_cung_cap = $_POST['nha_cung_cap'];
  $thuoc_id = $_POST['thuoc_id'];

  $sql = "INSERT INTO `thuocs`
    (`ten_thuoc`, `so_luong`, `don_gia`, `nha_cung_cap`, `thuoc_id`, `name`, `nsx`)
    SELECT :ten_thuoc, :so_luong, :don_gia, :nha_cung_cap, :thuoc_id, `danh_muc_thuoc`.`name`, `don_hangs`.`nsx`
    FROM `danh_muc_thuoc`
    JOIN `don_hangs` ON `danh_muc_thuoc`.`id` = `don_hangs`.`thuoc_id`
    WHERE `danh_muc_thuoc`.`id` = :thuoc_id";

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':ten_thuoc', $ten_thuoc);
  $stmt->bindParam(':so_luong', $so_luong);
  $stmt->bindParam(':don_gia', $don_gia);
  $stmt->bindParam(':nha_cung_cap', $nha_cung_cap);
  $stmt->bindParam(':thuoc_id', $thuoc_id);
  $stmt->execute();

  header("Location: index.php");
  exit();
}

$sql = "SELECT thuocs.*, danh_muc_thuoc.name AS danh_muc_name, don_hangs.nsx 
        FROM thuocs
        JOIN danh_muc_thuoc ON thuocs.thuoc_id = danh_muc_thuoc.id
        JOIN don_hangs ON thuocs.nha_cung_cap = don_hangs.id";

$stmt = $conn->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

include '../include/header.php';
include '../include/sidebar.php';
?>

<style>
h2 {
  text-align: center;
  color: blue;
}

form {
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

     

      <label for="lname">Danh mục thuốc</label><br>
      <select name="thuoc_id">
        <?php foreach ($rows as $row) : ?>
          <option value="<?php echo $row['id']; ?>"><?php echo $row['danh_muc_name']; ?></option>
        <?php endforeach; ?>
      </select><br><br>
      
      <input type="submit" value="THỰC HIỆN">
    </form>
  </div>
  <!-- End of Main Content -->
  <!-- Footer -->
  <?php include '../include/footer.php'; ?>
  <!-- End of Footer -->
  
<?php
try {
  // ...
  $stmt->execute();
} catch (PDOException $e) {
  echo "Lỗi: " . $e->getMessage();
}
?>











<?php
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['search'])) {
  $searchTerm = $_GET['search'];
  // Thực hiện truy vấn tìm kiếm
  $sql = "SELECT thuocs.*, danh_muc_thuoc.name AS danh_muc_name, don_hangs.nsx 
          FROM thuocs
          JOIN danh_muc_thuoc ON thuocs.thuoc_id = danh_muc_thuoc.id
          JOIN don_hangs ON thuocs.nha_cung_cap = don_hangs.id
          WHERE thuocs.ten_thuoc LIKE :searchTerm
          OR danh_muc_thuoc.name LIKE :searchTerm
          OR don_hangs.nsx LIKE :searchTerm";
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
  $stmt->execute();
  $rows = $stmt->fetchAll();
}
?>

<form action="localhost/ql_tiem_thuoc/thuocs/index.php" method="GET">
  <label for="search"></label>
  <input type="text" name="search" id="search" placeholder="Nhập từ tìm kiếm">
  <input type="submit" value="Tìm kiếm">
</form>










<label for="lname">Nhà cung cấp</label><br>
      <select name="nha_cung_cap">
        <?php foreach ($rows as $row) : ?>
          <option value="<?php echo $row['id']; ?>"><?php echo $row['nsx']; ?></option>
        <?php endforeach; ?>
      </select><br><br>
     