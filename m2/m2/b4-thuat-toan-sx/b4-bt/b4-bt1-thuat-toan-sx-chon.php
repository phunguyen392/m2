<?php

function selectionSort($list){
    
    for($i = 0; $i < count($list)-1; $i ++){
        $min = $i;
        for($j = $i+1; $j < count($list); $j++){
            if($list[$j] < $list[$min]){
                $min = $j;
            }
        }
        $trung_gian = $list[$i];
        $list[$i] = $list[$min];
        $list[$min] = $trung_gian;
    }
    return($list);
}
$list = [1, 9, 4.5, 6.6, 5.7, -4.5];
$list = selectionSort($list);
echo "<pre>";       
print_r($list) ;
echo "</pre>";       

