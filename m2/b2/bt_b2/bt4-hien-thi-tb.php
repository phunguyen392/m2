<?php
function calculate($x,$y){
    if (($y == 0) || ($x  == 0)  ){
        echo "loi";
    }
    else {
        $tong = $x + $y;
        $hieu = $x - $y;
        $tich = $x * $y;
        $thuong = $x / $y;
        echo "tong la: ". $tong;
        echo "<br>";
        echo "hieu la: ". $hieu;
        echo "<br>";
        
        echo "tich la: ". $tich;
        echo "<br>";

        echo "thuong la: ". $thuong;
    }
}
calculate(8,2);