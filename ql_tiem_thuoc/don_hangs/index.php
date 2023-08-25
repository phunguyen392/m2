<?php
include_once '../db.php';
$sql = "SELECT * FROM `don_hangs`";
// Truy vấn
$stmt = $conn->query($sql);
// Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC); //array

// Trả về dữ liệu
$rows = $stmt->fetchAll(); //[]

// echo '<pre>';
// print_r($rows);
// die();
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
    padding: 10px;
    text-align: center;
    color: blueviolet;
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

<br>
<h2>LIỆT KÊ HÓA ĐƠN</h2>

<div class="container">
  <div style="text-align: right;">

    <a class="btn btn-primary" href="http://localhost/ql_tiem_thuoc/don_hangs/create.php" role="button">Thêm</a>
  
  </div>
  <br>
<table border="2" class="container" >
  <tr>
    <th>STT</th>
    <th>NHÀ CUNG CẤP</th>
    <th>SỐ LƯỢNG</th>
    <th>NGÀY THÁNG</th>
    <th>TÙY CHỌN</th>

  </tr>

  <?php
foreach ($rows as $r):
    // echo '<pre>';
    // print_r($r['TENHANG']);
    // die();
    ?>
	    <tr>
	        <td><?php echo $r['id']; ?> </td>
	        <td><?php echo $r['nsx']; ?> </td>
	        <td><?php echo $r['so_luong']; ?> </td>
	        <td><?php echo $r['ngay_thang']; ?> </td>



	        <td>
	<a class="btn btn-info" href="edit.php?id=<?php echo $r['id']; ?>" role="button">SỬA</a>|
    <a class="btn btn-danger" href="delete.php?id=<?php echo $r['id']; ?>" onclick="return confirm('Bạn chắc chắn?');" role="button">XÓA</a>

	        </td>


	    </tr>

	    <!-- Kết thúc vòng lặp -->
	    <?php endforeach;?>

</table>
</div>
<?php
include '../include/footer.php';
?>

