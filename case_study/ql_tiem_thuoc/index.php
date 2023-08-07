<?php
include 'db.php';


$sql = "SELECT * FROM `ql_tiem_thuoc`";

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

    <h2 style="text-align: center; color:blue">QL THUỐC</h2>
    <table>
        <tr>

            <th>STT</th>
            <th>TÊN LOẠI THUỐC</th>
            <th>ĐƠN VỊ</th>
            <th>SỐ LƯỢNG</th>
            <th>GIÁ BÁN</th>
            <th>HẠN SỬ DỤNG</th>
            <th>THAO TÁC</th>

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
                <td><?php echo $r['DON_VI']; ?> </td>
                <td><?php echo $r['SO_LUONG']; ?> </td>
                <td><?php echo $r['GIA_BAN']; ?> </td>
                <td><?php echo $r['HAN_SU_DUNG']; ?> </td>




                <td> <a href="ql_tiem_thuoc/edit.php?id=<?php echo $r['id']; ?>">SỬA</a> |
                    <a onclick=" return confirm('chac chua ?'); " href="ql_tiem_thuoc/delete.php?id=<?php echo $r['id']; ?>">XÓA</a>|
                    <a href="ql_tiem_thuoc/create.php?id=<?php echo $r['id']; ?>">THÊM</a> |

                </td>
            </tr>

            <!-- Kết thúc vòng lặp -->
        <?php endforeach; ?>


    </table>

</body>

</html>