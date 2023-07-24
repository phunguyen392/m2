<?php
$mang = [12,3,17,11,66];
for($i = 0; $i < count($mang)-1; $i ++){
    $min = $i;
    for($j = $i+1; $j < count($mang); $j++){
        if($mang[$j] < $mang[$min]){
            $min = $j;
        }
    }
    $trung_gian = $mang[$i];
    $mang[$i] = $mang[$min];
    $mang[$min] = $trung_gian;
}

echo "<pre>";       
print_r($mang) ;
echo "</pre>";       

