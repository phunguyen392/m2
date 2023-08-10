<?php
include_once '../db.php';
$sql = "SELECT * FROM `ds_benh_nhan`";
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
$sql = "SELECT * FROM `ds_benh_nhan`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    // Thực hiện truy vấn tìm kiếm
    $sql = "SELECT * FROM `ds_benh_nhan` WHERE ds_benh_nhan.ten LIKE :searchTerm OR ds_benh_nhan.phong LIKE :searchTerm";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll();
}
?>
<form action="" method="GET" enctype="multipart/form-data">
        <label for="search">Tìm kiếm bệnh nhân:</label>
        <input type="text" name="search" id="search" placeholder="Nhập ">
        <input type="submit" value="Tìm kiếm">
    </form><br>


<h2>DANH SÁCH BỆNH NHÂN</h2>

<div class="container">
    <a class="btn btn-primary" href="http://localhost/ql_benh_nhan/ds_benh_nhan/create.php" role="button">THÊM</a><br>
    <table border="1" class="container">
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Phòng</th>
            <th>Ngày nhập viện</th>
            <th>Giới tính</th>
            <th>Tình trạng</th>
            <th>Thông tinh bệnh nhân</th>

            <th>TÙY CHỌN</th>

        </tr>
        <?php
        foreach ($rows as $r) :
            // echo '<pre>';
            // print_r($r['ten']);
            // die();
        ?>
            <tr>
                <td><?php echo $r['id']; ?> </td>
                <td><?php echo $r['ten']; ?> </td>
                <td><?php echo $r['phong']; ?> </td>
                <td><?php echo $r['ngay_nhap_vien']; ?> </td>
                <td><?php echo $r['gioi_tinh']; ?> </td>
                <td><?php echo $r['tinh_trang']; ?> </td>
                <td><?php echo $r['thong_tin_bn']; ?> </td>




                <td>
                    <a class="btn btn-info" href="edit.php?id=<?php echo $r['id']; ?>" role="button">SỬA</a>|
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $r['id']; ?>" onclick="return confirm('Bạn chắc chắn?');" role="button">XÓA</a>

                </td>


            </tr>
        <?php endforeach; ?>
    </table>
</div>
<style>
    table{
        width: 100%;
        text-align: center;
    }
</style>