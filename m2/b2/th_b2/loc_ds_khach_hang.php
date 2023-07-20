<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        Chon ngay sinh tu: <input type="date" id="ngay" name="ngay" value="">
        den: <input type="date" id="ngay1" name="ngay1" value="">
        <input type="submit" name="loc" value="loc">
    </form>

    <?php
    $danh_sach = [
        "ds1" => [
            "ten" => "ro van do",
            "ngay sinh" => "01/02/1985",
            "dia chi" => "bo dao nha",
            "hinh anh " => "https://cdnimg.vietnamplus.vn/uploaded/mzdic/2023_03_24/cristiano_ronaldo_portugal_2403.jpg"
        ],

        "ds2" => [
            "ten" => "mes van si",
            "ngay sinh" => "03/04/1987",
            "dia chi" => "ac hen ti na",
            "hinh anh" => "https://vcdn1-thethao.vnecdn.net/2023/06/26/messi-jpeg-1687788036-16877880-2753-7777-1687788089.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=2PkT4rmEsZCFhh_HsXZUtQ"
        ],

        "ds3" => [
            "ten" => "bo ru no",
            "ngay sinh" => "05/06/1994",
            "dia chi" => "bo dao nha",
            "hinh anh" => "br.png"
        ],

        "ds4" => [
            "ten" => "rat van fo",
            "ngay sinh" => "06/07/1997",
            "dia chi" => "anh ngo",
            "hinh anh" => "https://e0.365dm.com/23/06/768x432/skysports-marcus-rashford-manchester-united_6178956.jpg?20230605144002"
        ],

        "ds5" => [
            "ten" => "ca se mi ro",
            "ngay sinh" => "07/08/1991",
            "dia chi" => "bo ra zil",
            "hinh anh" => "https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt1926021b5334f5e1/63c24f63a9748f582372fe06/Casemiro.jpg"
        ]

    ];
    function tim_du_lieu($ds_khach_ban_dau, $ngay_bat_dau, $ngay_ket_thuc)
    {
        if (empty($ngay_bat_dau) || empty($ngay_ket_thuc)) {
            return $ds_khach_ban_dau;
        }
        $ds_khach = [];
        foreach ($ds_khach_ban_dau as $khach) {
            if (strtotime($khach["ngay sinh"]) < strtotime($ngay_bat_dau))
                continue;
            if (strtotime($khach["ngay sinh"]) > strtotime($ngay_ket_thuc))
                continue;
            $ds_khach[] = $khach;
        }
        return $ds_khach;
    }
    $ngay_bat_dau = $_POST["ngay"] ?? null;

    $ngay_ket_thuc = $_POST["ngay1"] ?? null;
    $ds_khach = tim_du_lieu($danh_sach, $ngay_bat_dau, $ngay_ket_thuc);

    ?>
    <table border="1">
        <caption>
            <h2>Danh sách khách hàng</h2>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Anh</th>
        </tr>
        <?php foreach ($ds_khach as $index => $khach) : ?>
            <tr>
                <td> <?php echo $index; ?> </td>
                <td> <?php echo $khach['ten']; ?> </td>
                <td> <?php echo $khach['ngay sinh']; ?> </td>
                <td> <?php echo $khach['dia chi']; ?> </td>
                <td>
                <div class="br.png"><img src="<?php echo $khach['br.png']; ?>"/></div>
            </td>
            </tr>

        <?php endforeach; ?>
    </table>


</body>

</html>