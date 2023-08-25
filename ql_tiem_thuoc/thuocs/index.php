<?php
include_once '../db.php';

$sql = "SELECT thuocs.*, danh_muc_thuoc.name AS danh_muc_name, don_hangs.nsx 
        FROM thuocs
        JOIN danh_muc_thuoc ON thuocs.thuoc_id = danh_muc_thuoc.id
        JOIN don_hangs ON thuocs.nha_cung_cap = don_hangs.id";






// Truy vấn
$stmt = $conn->query($sql);

// Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC); //array 

// Trả về dữ liệu
$rows = $stmt->fetchAll(); //[]
foreach ($rows as $value)

  //   echo '<pre>';
  // print_r($value['danh_muc_name']);
  // print_r($value['nsx']);

  // die();
?>

<?php
include '../include/header.php';
include '../include/sidebar.php';

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

<form action="" method="GET">
  <label for="search"></label>
  <input type="text" name="search" id="search" placeholder="Nhập từ tìm kiếm">
  <input type="submit" value="Tìm kiếm">
</form>


<style>
  table {
    width: 100%;
    border-collapse: collapse;

  }

  th,
  td {
    border: 5px solid #ddd;
    padding: 10px;
    text-align: center;
  }

  th {
    background: linear-gradient(to bottom, #F2F2F2, #ddd);
  }

  td {
    color: blueviolet;
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

<div class="container">
  <br>
  <h2>LIỆT KÊ CÁC LOẠI THUỐC</h2><br>
  <div style="text-align: right;">

    <a class="btn btn-primary" href="http://localhost/ql_tiem_thuoc/thuocs/create.php" role="button">Thêm</a>
  </div>
  <br>

  <table border="">
    <tr>
      <th>STT</th>
      <th>TÊN LOẠI THUỐC</th>
      <th>SỐ LƯỢNG</th>
      <th>ĐƠN GIÁ</th>
      <th>NHÀ CUNG CẤP</th>
      <th>TÊN DANH MỤC THUỐC</th>

      <th>TÙY CHỌN</th>

    </tr>

</div>
<?php
foreach ($rows as $r) :
  // echo '<pre>';
  // print_r($value['danh_muc_name']);
  // die();

?>


  <tr>
    <td><?php echo $r['id']; ?> </td>
    <td><?php echo $r['ten_thuoc']; ?> </td>
    <td><?php echo $r['so_luong']; ?> </td>
    <td><?php echo $r['don_gia']; ?> </td>


    <td><?php echo $r['nsx']; ?> </td>
    <td><?php echo $r['danh_muc_name']; ?></td>


    <td>
      <a class="btn btn-info" href="edit.php?id=<?php echo $r['id']; ?>" role="button">SỬA</a>

      <a class="btn btn-danger" href="delete.php?id=<?php echo $r['id']; ?>" onclick="return confirm('Bạn đã chắc chắn?');" role="button">XÓA</a>



    </td>
  </tr>

  <!-- Kết thúc vòng lặp -->
<?php endforeach; ?>

</table>

<?php
include '../include/footer.php';
?>

