<?php
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? 1 : -1;
}

// Mảng cần sắp xếp
$numbers = array(3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5);

// Sắp xếp mảng bằng hàm usort
usort($numbers, "cmp");
echo "<pre>";
// In mảng đã sắp xếp
print_r($numbers);
echo "</pre>";
