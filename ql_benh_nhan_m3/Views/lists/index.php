
<form action="index.php?" method="get" >
    <input type="hidden" name="controller" value="list">
    <input type="hidden" name="action" value="index">
    <input type="search" name="search" id="">
    <button class="btn btn-primary" type="submit">tim kiem
    </button>
</form>
<div>
    <a href="index.php?controller=list&action=create">
        <button type="button" class="btn btn-info">THÊM MỚI</button>
    </a>

    </div>
    <br>
<h3>DANH SÁCH BỆNH NHÂN</h3><br><br>
<table border="1" class="table" >
    <tr>
        <th>STT</th>
        <th>TÊN</th>
        <th>PHÒNG</th>
        <th>TÙY CHỌN</th>

        


    </tr>

    <!-- Bắt đầu lặp -->
    <?php
    foreach ($items as $row) :
        // echo '<pre>';
        // print_r($r);
        // die();
    ?>
        <tr>

            <td><?php echo $row['id']; ?> </td>
            <td><?php echo $row['name']; ?> </td>
            <td><?php echo $row['class']; ?> </td>
           
            <td>
                <a href="index.php?controller=list&action=edit&id=<?php echo $row['id']; ?>">
                            <button type="button" class="btn btn-primary">SỬA</button>
                <a href="index.php?controller=list&action=show&id=<?php echo $row['id']; ?>"> |
                <button type="button" class="btn btn-success">XEM</button></a>

                <a onclick=" return confirm('ban chac chan k?'); " href="index.php?controller=list&action=destroy&id=<?php echo $row['id']; ?>">|
                <button type="button" class="btn btn-danger">XÓA</button>

            </td>
        </tr>

        <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
</table>