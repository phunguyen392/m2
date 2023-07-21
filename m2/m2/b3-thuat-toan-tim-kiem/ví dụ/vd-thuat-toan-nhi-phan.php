<?php
function tim_kiem_nhi_phan($mang, $x) {
    // Thiết lập giới hạn dưới và giới hạn trên trong mảng
    $vi_tri_dau = 0;
    $vi_tri_cuoi = count($mang) - 1;

    while ($vi_tri_dau <= $vi_tri_cuoi) {
        // Tìm phần tử giữa của mảng
        $phan_tu_giua = floor(($vi_tri_dau + $vi_tri_cuoi) / 2);

        // Nếu phần tử giữa bằng với phần tử cần tìm kiếm, trả về vị trí của phần tử đó
        if ($mang[$phan_tu_giua] === $x) {
            return $phan_tu_giua;
           echo $phan_tu_giua;
        }

        // Nếu phần tử giữa lớn hơn phần tử cần tìm kiếm, tìm kiếm phía bên trái của mảng
        if ($mang[$phan_tu_giua] > $x) {
            $vi_tri_cuoi = $phan_tu_giua - 1;
        }

        // Nếu phần tử giữa nhỏ hơn phần tử cần tìm kiếm, tìm kiếm phía bên phải của mảng
        else {
            $vi_tri_dau = $phan_tu_giua + 1;
        }
    }

    // Nếu phần tử không tồn tại trong mảng, trả về k co
    return "k co trong mang";
}
$mang = [1,2,3,4,6,32,45,67];
echo "<pre>";
print_r (tim_kiem_nhi_phan($mang,6));
echo "</pre>";