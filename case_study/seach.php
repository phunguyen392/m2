<?php
include '../db.php';
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    // Thực hiện tìm kiếm dựa trên từ khóa và xử lý kết quả ở đây
    // ...
    // Code xử lý tìm kiếm và hiển thị kết quả
    // ...
    echo "Kết quả tìm kiếm cho từ khóa: " . $keyword;
}
?>
<form action="search.php" method="GET">
  <input type="text" name="keyword" placeholder="Nhập từ khóa tìm kiếm">
  <input type="submit" value="Tìm kiếm">
</form>