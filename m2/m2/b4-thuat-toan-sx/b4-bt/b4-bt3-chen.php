<?php
function insertionSort($list)
{
    for ($i = 1; $i < count($list); $i++) {
        $a = $list[$i];
        $j = $i - 1;
        print_r($list);
        while ($j >= 0 && $list[$j] > $a) {
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j + 1] = $a;
    }
    return $list;
}
$list = [5, 8 , 3, 7, 4];


echo "<pre>";
print_r(insertionSort($list));
echo "</pre>";
