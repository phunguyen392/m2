<form action="index.php?controller=post&action=store" method="post" enctype="multipart/form-data">
    tieu de:<br> <input type="text" name="title"> <br>
    
    noi dung:<br> <input type="text" name="content"> <br>
    <select name="user_id">
    <?php foreach ($items as $row) : ?>
          <option value="<?php echo $row['id']; ?>"><?php echo $row['email']; ?></option>
        <?php endforeach; ?>
      </select><br><br>
  
    <input type="submit" value="Them">
</form>