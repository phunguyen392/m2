<?php
include 'db.php';

?>
<?php
include 'include/header.php';
include 'include/sidebar.php';

?>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<!-- <div class="content-wrapper">
  <img src="localhost/ql_tiem_thuoc/images/anh1.jpg" alt="Ảnh" />
</div> -->


<!-- Content Wrapper -->
<div class="content-wrapper">
  <?php
  $imagePath = 'images/anh1.jpg'; // Đường dẫn và tên tệp ảnh
  $width = 1150; // Độ rộng mong muốn của ảnh (đơn vị là pixel)
  $height = 900; // Chiều cao mong muốn của ảnh (đơn vị là pixel)
  ?>
  <img src="<?php echo $imagePath; ?>" alt="Ảnh" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
</div>
<br>
<div >
<?php
echo '<span style="color: blue; font-size: 50px;">
LƯƠNG Y NHƯ TỪ MẪU
</span>';
?>
</div>
<!-- End of Content Wrapper -->
<!-- End of Content Wrapper -->
<style>

 div{
    text-align: center;
    color: green;
}
</style> 

<?php
include 'include/footer.php';
?>
<!-- End of Footer -->