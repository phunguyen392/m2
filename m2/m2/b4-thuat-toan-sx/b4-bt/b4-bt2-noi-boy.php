<?php
function bubbleSort($list) {
    
    
    for ($i = 0; $i < count($list) - 1; $i++) {
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$i] > $list[$j]) {
                $trung_gian = $list[$j];
                $list[$j] = $list[$i];
                $list[$i] = $trung_gian;
            }
        }
        // echo $list[$i] . ', ';
    }
    return $list;
};
$list = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
$list = bubbleSort($list);
echo "<pre>";
print_r($list);
echo "</pre>";