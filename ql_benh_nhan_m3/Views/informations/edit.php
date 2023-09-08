<form action="index.php?controller=information&action=update&id=<?= $row['id']; ?>" method="post">
  NGÀY NHẬP VIỆN:<br><input type="text" name="ngay_nhap_vien" value="<?= $row['ngay_nhap_vien']; ?>"> <br><br>
  GIỚI TÍNH:<br> <input type="text" name="gioi_tinh" value="<?= $row['gioi_tinh']; ?>"> <br><br>
  TÌNH TRẠNG:<br><input type="text" name="tinh_trang" value="<?= $row['tinh_trang']; ?>"> <br><br>
  THÔNG TIN:<br> <input type="text" name="thong_tin" value="<?= $row['thong_tin']; ?>"> <br>

  <button type="submit" value="Cap nhat">CẬP NHẬT</button>
  <button> <a href="index.php?controller=information&action=index">QUAY LẠI</a></button>

</form>