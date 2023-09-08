

<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="bayve.css"> -->
</head>
<div>
    <a href="index.php?controller=information&action=create">
        <button type="button" class="btn btn-info">THÊM MỚI</button>
    </a>
</div>
<br>





<table border="1">

<h3>THÔNG TIN BỆNH NHÂN</h3>


<tr>
    <th>STT</th>
    <th>NGÀY NHẬP VIỆN</th>
    <th>GIỚI TÍNH</th>
    <th>TÌNH TRẠNG</th>
    <th>THÔNG TIN</th>

    <th>TUỲ CHỌN</th>

</tr>

<!-- Bắt đầu lặp -->
<?php
foreach ($items as $r) :
    // echo '<pre>';
    // print_r($r);
    // die();
?>
    <tr>
        <td><?php echo $r['id']; ?> </td>

        <td><?php echo $r['ngay_nhap_vien']; ?> </td>
        <td><?php echo $r['gioi_tinh']; ?> </td>
        <td><?php echo $r['tinh_trang']; ?> </td>
        <td><?php echo $r['thong_tin']; ?> </td>
       



        <td>
            <a href="index.php?controller=information&action=edit&id=<?php echo $r['id']; ?>">
                <button type="button" class="btn btn-primary">SỬA</button>|
            </a>

            <a href="index.php?controller=information&action=show&id=<?php echo $r['id']; ?>">
                <button type="button" class="btn btn-success">XEM</button>|
            </a>

            <a onclick=" return confirm('ban chac chan k?'); " href="index.php?controller=information&action=destroy&id=<?php echo $r['id']; ?>">
                <button type="button" class="btn btn-danger">XOÁ</button>
            </a>

        </td>
    </tr>

    <!-- Kết thúc vòng lặp -->
<?php endforeach; ?>
</table>