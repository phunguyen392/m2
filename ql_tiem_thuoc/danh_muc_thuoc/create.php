<?php
include_once '../db.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // echo '<pre>';
    // print_r ($_REQUEST);
    // die();
    $name = $_REQUEST['name'];




    $sql = "INSERT INTO `danh_muc_thuoc` 
    ( `name`) 
    VALUES 
    ('$name')";
    //Thuc hien truy van
    $conn->exec($sql);

    // echo($sql);
    // die();

    // chuyen huong ve trang danh sach
    header("Location: index.php");
}

?>
<?php
include '../include/header.php';
include '../include/sidebar.php';

?>
<!-- End of Sidebar -->
<style>
    h2 {
        text-align: center;
        color: blue;
    }

    form {
        text-align: center;
    }
</style>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <br>
        <h2>THÊM danh muc</h2>

        <form action="" method="POST">
            <label for="fname">danh muc thuoc</label><br>
            <input type="text" name="name"><br>




            <input type="submit" value="THỰC HIỆN">
        </form>





    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php
    include '../include/footer.php';
    ?>
    <!-- End of Footer -->