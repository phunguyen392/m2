
<form action="index.php?action=update&id=<?= $row['id'];?>" method="post">
    DANH MỤC THUỐC :<br><input type="text" name="name" value="<?= $row['name'];?>"> <br>
    NGÀY NHẬP:<br> <input type="text" name="created_at" value="<?= $row['created_at'];?>"> <br>
    NGÀY CẬP NHẬT :<br><input type="text" name="updated_at" value="<?= $row['updated_at'];?>"> <br>
    HÌNH ẢNH :<br><input type="text" name="image_url" value="<?= $row['image_url'];?>"> <br>

    <input type="submit" value="CẬP NHẬT">
</form>