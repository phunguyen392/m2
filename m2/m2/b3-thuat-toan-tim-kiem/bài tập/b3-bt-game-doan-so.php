<?php
$ds_phan_tu = [];
// $tim = 1;

function doan_so($ds_phan_tu,$tim)  {
    $trai = 0;
    $phai = count($ds_phan_tu) - 1;
    while ($trai <= $phai) {
        $giua = ($trai + $phai) /2;
        if($ds_phan_tu[$giua] > $tim){
            $trai = $giua - 1;}
        else($ds_phan_tu[$giua] < $tim){
                $phai = $giua + 1;
            }
        }    
    return $giua;
}




