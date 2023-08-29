<!-- <?php
echo "<pre>";
print_r($row);

?> -->

<table border="1">
    <tr>
        <td>Stt</td>
        <td><?= $row['id'];?></td>
    </tr>
    <tr>
        <td>mail</td>
        <td><?= $row['email'];?></td>
    </tr>
    <tr>
        <td>tieu de</td>
        <td><?= $row['title'];?></td>
    </tr>
    <tr>
        <td>noi dung</td>
        <td><?= $row['content'];?></td>
    </tr>
   
 
</table>