<?php
function selection_sort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        $min_idx = $i;
        for ($j = $i+1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min_idx]) {
                $min_idx = $j;
            }
        }
        // Hoán đổi phần tử nhỏ nhất với phần tử đầu tiên của mảng chưa được sắp xếp
        $temp = $arr[$i];
        $arr[$i] = $arr[$min_idx];
        $arr[$min_idx] = $temp;
    }
    return $arr;
}
$arr = array(64, 25, 12, 22, 11);
$sorted_arr = selection_sort($arr);
echo "<pre>";       
print_r($sorted_arr); 
echo "</pre>";

?>



