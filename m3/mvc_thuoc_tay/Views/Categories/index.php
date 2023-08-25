<?php
echo '<br>' . __FILE__;
echo "<hr>";





?>




<a href="index.php?action=create"> THÊM MỚI</a><br>
<table border="1">
    <tr>
        <th>STT</th>
        <th>DANH MỤC THUỐC</th>
        <th>NGÀY NHẬP</th>
        <th>NGÀY CẬP NHẬT</th>
        <th>HÌNH ẢNH</th>
        <th>TÙY CHỌN</th>




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
            <td><?php echo $r['name']; ?> </td>
            <td><?php echo $r['created_at']; ?> </td>
            <td><?php echo $r['updated_at']; ?> </td>
            <td><?php echo $r['image_url']; ?> </td>

            <td>
                <a href="index.php?action=edit&id=<?php echo $r['id']; ?>">SỬA</a> |
                <a href="index.php?action=show&id=<?php echo $r['id']; ?>">XEM</a> |
                <a onclick=" return confirm('ban chac chan k?'); " href="index.php?action=destroy&id=<?php echo $r['id']; ?>">XÓA</a>
            </td>
        </tr>

        <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
</table>