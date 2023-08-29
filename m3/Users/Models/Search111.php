






    

    <!-- form tim kiem -->
    <div align="center">
        <form method="GET" action="">
            <input type="text" name="search">
            <input type="submit" name="timkiem" value="Tìm">
        </form>
    </div>
    <?php
    if (isset($_GET['timkiem'])) {
        $search = addslashes($_GET['search']);
        if (empty($search)) {
            echo "Bạn chưa nhập thông tin tìm kiếm";
        } else {
            // Kết nối đến cơ sở dữ liệu
            $conn = mysqli_connect("localhost", "root", "", "tiem_thuoc");
            if (!$conn) {
                die("Không thể kết nối đến cơ sở dữ liệu. Lỗi: " . mysqli_connect_error());
            }

            // Tạo câu truy vấn sử dụng phép like để tìm kiếm dữ liệu chính xác hơn
            $query = "SELECT users.*,posts.user_id FROM users
            JOIN posts ON users.id = posts.user_id
            
            WHERE post.user_id LIKE '%$search%'  ";


            // Thực thi câu truy vấn
            $result = mysqli_query($conn, $query);

            // Đếm số dòng trả về
            $num = mysqli_num_rows($result);    

            // Kiểm tra kết quả trả về
            if ($num > 0) {
                echo "$num kết quả trả về với từ khóa <b>$search</b> là: ";
                echo "<br>";
                // Hiển thị dữ liệu trong bảng
                echo '<table border="1" cellspacing="0" cellpadding="10">';
                echo '<tr>
                <th>mail</th>
                
                </tr>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo "<td>{$row['email']}</td>";
                    // echo "<td>{$row['username']}</td>";
                    // echo "<td>{$row['password']}</td>";
                    // echo "<td>{$row['email']}</td>";
                    // echo "<td>{$row['level']}</td>";
                    // echo "<td>{$row['name']}</td>";

                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo "Không tìm thấy kết quả!";
            }

            // Đóng kết nối
            mysqli_close($conn);
        }
    }
    ?>
</body>

</html>