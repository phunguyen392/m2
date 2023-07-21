<?php
function so_nguyen($mang_so_nguyen){
$min = $mang_so_nguyen[0];
$index = 0;
for ($i=0; $i < count($mang_so_nguyen); $i++) { 
    if ($mang_so_nguyen[$i] < $min){
        $min = $mang_so_nguyen[$i];
        $index = $i;
    } 
}
return $index;
}
$mang_so_nguyen = [45,23,43,5,6];
$min_index = so_nguyen($mang_so_nguyen);
echo "vi tri : ". $min_index;
echo "<br>";
echo "gia tri nho nhat la: ".$mang_so_nguyen[$min_index];