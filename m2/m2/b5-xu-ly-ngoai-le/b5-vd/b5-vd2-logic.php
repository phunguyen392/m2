<?php
$mang = [1,3,5,7,8];
foreach($mang as $mang){
    if($mang == 3){
        continue;
    }
    echo $mang;
}