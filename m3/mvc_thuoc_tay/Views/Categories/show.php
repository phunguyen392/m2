<table border="1">
    <tr>
        <td>STT</td>
        <td><?= $row['id'];?></td>
    </tr>
    <tr>
        <td>TÊN DANH MỤC</td>
        <td><?= $row['name'];?></td>
    </tr>
    <tr>
        <td>NGÀY NHẬP</td>
        <td><?= $row['created_at'];?></td>
    </tr>
    <tr>
        <td>NGÀY CẬP NHẬT</td>
        <td><?= $row['updated_at'];?></td>
    </tr>
    <tr>
        <td>HÌNH ẢNH</td>
        <td><?= $row['image_url'];?></td>
    </tr>
 
</table>