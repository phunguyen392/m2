<?php
function dem_so($number, $value)
 {
   global $count;
   $count  = 0;
    for($i = 0; $i < count($number); $i++){
        if($number[$i] == $value){
            $count ++;
        }
    }
    return $count;
}
$number = [1,2,3,4,5,1,2,3,4,3,4,3,3];
dem_so($number,3);
echo  "so"  . "xuat hien" . $count . " lan"; 