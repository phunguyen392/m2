<?php
$mang = [10, 5, 9, 11, 2, 4, 9];

for ($i = 0; $i < count($mang) - 1; $i++) {
    for ($j = $i + 1; $j < count($mang); $j++) {
        if ($mang[$i] > $mang[$j]) {
            $trung_gian = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $trung_gian;
        }
    }
    echo $mang[$i] . ', ';
}
