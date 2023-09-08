<table border="1">
    <tr>
        <th>STT</th>
        <th>DANH SÁCH BỆNH NHÂN</th>
        <th>PHÒNG BỆNH NHÂN</th>
        <th>TÙY CHỌN</th>
    </tr>
    <tr>
        <td><?= $row['id'];?></td>
        <td><?= $row['name'];?></td>
        <td><?= $row['class'];?></td>
  <td>  <a href="index.php?controller=list&action=index">QUAY LẠI</a></td>
        
    </tr>
   
</table>