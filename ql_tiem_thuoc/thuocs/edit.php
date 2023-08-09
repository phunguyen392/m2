<?php
include_once '../db.php';

$sql_don_hangs = "SELECT * FROM `don_hangs`";
$stmt_don_hangs = $conn->query($sql_don_hangs);
$stmt_don_hangs->setFetchMode(PDO::FETCH_ASSOC);
$rows_don_hangs = $stmt_don_hangs->fetchAll();


$sql_danh_muc_thuoc = "SELECT * FROM `danh_muc_thuoc`";
$stmt_danh_muc_thuoc = $conn->query($sql_danh_muc_thuoc);
$stmt_danh_muc_thuoc->setFetchMode(PDO::FETCH_ASSOC);
$rows_danh_muc_thuoc = $stmt_danh_muc_thuoc->fetchAll();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

$id = isset($_GET['id']) ? $_GET['id'] : 0;

if (!$id) {
    header("Location: index.php");
}

$sql_ten_thuoc = "SELECT * FROM `thuocs` WHERE id = $id";
$stmt_ten_thuoc = $conn->query($sql_ten_thuoc);
$stmt_ten_thuoc->setFetchMode(PDO::FETCH_ASSOC);
$row_ten_thuoc = $stmt_ten_thuoc->fetch();

$sql_nha_cung_cap = "SELECT * FROM `don_hangs`";
$stmt_nha_cung_cap = $conn->query($sql_nha_cung_cap);
$stmt_nha_cung_cap->setFetchMode(PDO::FETCH_ASSOC);
$rows_nha_cung_cap = $stmt_nha_cung_cap->fetchAll();


$sql_thuoc_id = "SELECT * FROM `thuocs` WHERE id = $id";
$stmt_thuoc_id = $conn->query($sql_thuoc_id);
$stmt_thuoc_id->setFetchMode(PDO::FETCH_ASSOC);
$row_thuoc_id = $stmt_thuoc_id->fetch();

$sql_name = "SELECT * FROM `danh_muc_thuoc`";
$stmt_name = $conn->query($sql_name);
$stmt_name->setFetchMode(PDO::FETCH_ASSOC);
$rows_name = $stmt_name->fetchAll();



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ten_thuoc = $_POST['ten_thuoc'];
    $so_luong = $_POST['so_luong'];
    $don_gia = $_POST['don_gia'];
    $nha_cung_cap = $_POST['nha_cung_cap'];
    $thuoc_id = $_POST['thuoc_id'];
    $sql_update = "UPDATE `thuocs` SET `ten_thuoc` = '$ten_thuoc', `so_luong` = '$so_luong', `don_gia` = '$don_gia', `nha_cung_cap` = '$nha_cung_cap', `thuoc_id` = '$thuoc_id' WHERE `id` = $id";
    $conn->exec($sql_update);

    header("Location: index.php");
}
?>

<?php
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
    input{
        text-align: center;
        color: blueviolet;
    }
</style>
<br>
<h2>THÊM MẶT HÀNG</h2>

<form action="" method="POST">
    <label for="fname">TÊN LOẠI THUỐC</label><br>
    <input type="text" name="ten_thuoc" value="<?= $row_ten_thuoc['ten_thuoc']; ?>"><br>
    <label for="lname">SỐ LƯỢNG</label><br>
    <input type="number" name="so_luong" value="<?= $row_ten_thuoc['so_luong']; ?>"><br><br>
    <label for="lname">ĐƠN GIÁ</label><br>
    <input type="number" name="don_gia" value="<?= $row_ten_thuoc['don_gia']; ?>"><br><br>
    <label for="lname"> NHÀ CUNG CẤP</label><br>
    <select name="nha_cung_cap">
        <?php foreach ($rows_nha_cung_cap as $row_nsx) : ?>
            <option value="<?php echo $row_nsx['id']; ?>" <?php if ($row_nsx['id'] == $row_ten_thuoc['nha_cung_cap']) echo "selected"; ?>>
                <?php echo $row_nsx['nsx']; ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>


    <label for="lname">danh muc cac loai thuoc</label><br>

    <select name="thuoc_id">
        <?php foreach ($rows_danh_muc_thuoc as $danh_muc) : ?>
            <option value="<?php echo $danh_muc['id']; ?>" <?php if ($danh_muc['id'] == $row_ten_thuoc['thuoc_id']) echo "selected"; ?>>
            <?= $danh_muc['name']; ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>


    



    <input type="submit" value="THỰC HIỆN">
</form>

<?php
include '../include/footer.php';
?>