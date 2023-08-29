<form action="index.php?action=update&id=<?= $row['id'];?>" method="post">
    tieu de:<br> <input type="text" name="title" value="<?= $row['title'];?>"> <br>
   noi dung :<br><input type="text" name="content" value="<?= $row['content'];?>"> <br>
   ten tk:<br> <select name="user_id">
    <?php foreach ($users as $row) : ?>
          <option value="<?php echo $row['id']; ?>"><?php echo $row['email']; ?></option>
        <?php endforeach; ?>
      </select><br><br>
    <input type="submit" value="Cap nhat">
</form>