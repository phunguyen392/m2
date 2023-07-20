<?php
$number = [12,5,9,7,11];
// function tinh_tong($a, $b, $c = 1){
//     return $a + $b + $c;
// }
// echo tinh_tong(3,4);
array_splice($number, 2,1,13);
rsort($number);
echo "<pre>";
print_r($number);
echo "</pre>";