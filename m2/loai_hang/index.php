<?php
include '../db.php';


$sql = "SELECT * FROM `loaihangs`";

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

    <h2>LIET KE LOAI HANG</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>TENLOAIHANG</th>
            <th>HANHDONG</th>


        </tr>

        <?php
        foreach ($rows as $r) :
            // echo '<pre>';
            // print_r($r['TENHANG']);
            // die();
        ?>
            <tr>
                <td><?php echo $r['MALOAIHANG']; ?> </td>
                <td><?php echo $r['TENLOAIHANG']; ?> </td>
                <td> <a href="edit.php?id=<?php echo $r['MALOAIHANG']; ?>">Sua</a> |
                    <a onclick=" return confirm('chac chua ?'); " href="delete.php?id=<?php echo $r['MALOAIHANG']; ?>">Xoa</a>
                </td>
            </tr>

            <!-- Kết thúc vòng lặp -->
        <?php endforeach; ?>


    </table>

</body>

</html>