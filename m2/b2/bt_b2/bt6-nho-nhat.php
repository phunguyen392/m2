<?php
$mang_so =[
    [12,23,34,45,56],
    [98,87,65,54,43],
    [32,21,1,66,8]
];
$min = $mang_so[0][0];
for($i=0; $i < count($mang_so); $i ++){
    for($j=0; $j < count($mang_so[$i]); $j ++){
        if($mang_so[$i][$j] < $min){
        $min = $mang_so[$i][$j];
    }
        
    }
}
echo $min;
