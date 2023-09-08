<form action="index.php?controller=list&action=update&id=<?= $row['id']; ?>" method="post">
  DANH SÁCH BỆNH NHÂN :<br><input type="text" name="name" value="<?= $row['name']; ?>"> <br><br>
  PHÒNG BỆNH:<br> <input type="text" name="class" value="<?= $row['class']; ?>"> <br>


  <button type="submit" value="Cap nhat">CẬP NHẬT</button>
  <button> <a href="index.php?controller=list&action=index">QUAY LẠI</a></button>

</form>