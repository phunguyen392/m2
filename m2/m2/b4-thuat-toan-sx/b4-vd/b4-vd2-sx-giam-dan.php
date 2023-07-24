<?php
$mang = [2,14,32,9,15,8,16];
for($i=0; $i < count($mang)-1; $i ++ ){
    for($j = $i +1; $j < count($mang)-1; $j++){
        if($mang[$i] < $mang[$j]){
            $trung_gian = $mang[$i];
            $mang[$i] = $mang[$j];
            $mang[$j] = $trung_gian;
        }
    }
    echo $mang[$i]. ', ';
}