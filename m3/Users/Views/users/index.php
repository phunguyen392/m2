<!-- <form method="get" action="">
    <input type="text" name="search">
    <input type="submit" name="timkiem">
</form>
<?php
if(isset($_GET['timkiem'])){
    $search = ($_GET['search']);
    if(empty($search)){
        echo "ban chua nhap thog tin";
    }else{
         // Kết nối đến cơ sở dữ liệu
         $conn = mysqli_connect("localhost", "root", "", "bang_user");
         if (!$conn) {
             die("Không thể kết nối đến cơ sở dữ liệu. Lỗi: " . mysqli_connect_error());
    }   
}
}

?> -->

<?php
echo '<br>' . __FILE__;
echo "<hr>";





?>




<a href="index.php?action=create"> Them moi </a>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>mail</th>
        <th>mat khau</th>
        <th>SDT</th>
        <th>anh</th>
        <th>Tùy chọn</th>


    </tr>

    <!-- Bắt đầu lặp -->
    <?php
    foreach ($items as $r) :
        // echo '<pre>';
        // print_r($r);
        // die();
    ?>
        <tr>
            <td><?php echo $r['id']; ?> </td>
            <td><?php echo $r['name']; ?> </td>
            <td><?php echo $r['email']; ?> </td>
            <td><?php echo $r['password']; ?> </td>
            <td><?php echo $r['phone']; ?> </td>
            <td><img width="100" src="<?php echo 'http://localhost/m3/Users/' . $r['image']; ?>" alt=""></td>

            <td>
                <a href="index.php?action=edit&id=<?php echo $r['id']; ?>">Sua</a> |
                <a href="index.php?action=show&id=<?php echo $r['id']; ?>">Xem</a> |
                <a onclick=" return confirm('ban chac chan k?'); " href="index.php?action=destroy&id=<?php echo $r['id']; ?>">Xoa</a>
            </td>
        </tr>

        <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
</table>