<?php
include '../db.php';


$sql = "SELECT * FROM `chi_tiet_loai_thuoc`";

// Truy vấn
$stmt = $conn->query($sql);
// Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC); //array 

// Trả về dữ liệu
$rows = $stmt->fetchAll(); //[]

// echo '<pre>';
// print_r($rows);
// die();

?>
<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2 style="text-align: center; color:blue">LIỆT KÊ CÁC LOẠI THUỐC</h2>
    <table>
        <tr>

            <th>STT</th>
            <th>TÊN LOẠI THUỐC</th>
            <th>TỔNG SỐ LƯỢNG</th>
            <th>SỐ LÔ</th>
            <th>MÔ TẢ</th>
            <th>TÙY CHỌN</th>


        </tr>

        <?php
        foreach ($rows as $r) :
            // echo '<pre>';
            // print_r($r['TENHANG']);
            // die();
        ?>
            <tr>
                <td><?php echo $r['id']; ?> </td>
                <td><?php echo $r['TEN_THUOC']; ?> </td>
                <td><?php echo $r['TONG_SO_LUONG']; ?> </td>
                <td><?php echo $r['MA_LOAI_THUOC_id']; ?> </td>
                <td><?php echo $r['MO_TA']; ?> </td>




                <td>
                    <a href="chi_tiet_loai_thuoc/edit.php?id=<?php echo $r['id']; ?>">SỬA</a> |
                    <a onclick=" return confirm('chac chua ?'); " href="chi_tiet_loai_thuoc/delete.php?id=<?php echo $r['id']; ?>">XÓA</a>|
                    <a href="chi_tiet_loai_thuoc/create.php?id=<?php echo $r['id']; ?>">THÊM</a> |

                </td>
            </tr>

            <!-- Kết thúc vòng lặp -->
        <?php endforeach; ?>


    </table>

</body>

</html>