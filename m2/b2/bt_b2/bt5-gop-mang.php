<?php
$mang_so_nguyen1 = [1, 2, 3];
$mang_so_nguyen2 = [1, 5, 6];
$mang_so_nguyen3 = [ 1, 8, 9];
$mang_so_nguyen4 = [ 10, 11, 12];

$mang_so_nguyen = [];

for($i = 0; $i < count($mang_so_nguyen1); $i++) {
    $mang_so_nguyen[] = $mang_so_nguyen1[$i];
}

for ($j = 0; $j < count($mang_so_nguyen2); $j++) {
    $mang_so_nguyen[] = $mang_so_nguyen2[$j];
}
for ($k = 0; $k < count($mang_so_nguyen3); $k++) {
    $mang_so_nguyen[] = $mang_so_nguyen3[$k];
}
for ($k = 0; $k < count($mang_so_nguyen4); $k++) {
    $mang_so_nguyen[] = $mang_so_nguyen4[$k];
}

echo "<pre>";

print_r($mang_so_nguyen);
echo "</pre>";
