<form action="index.php?action=update&id=<?= $row['id'];?>" method="post" enctype="multipart/form-data">
    TEN :<br><input type="text" name="name" value="<?= $row['name'];?>"> <br>
    email:<br> <input type="text" name="email" value="<?= $row['email'];?>"> <br>
    mat khau :<br><input type="text" name="password" value="<?= $row['password'];?>"> <br>
    anh:<br> <input type="file" name="image" value="<?= $row['image'];?>"> <br>
    SDT:<br> <input type="text" name="phone" value="<?= $row['phone'];?>"> <br>

    <input type="submit" value="Cap nhat">
</form>