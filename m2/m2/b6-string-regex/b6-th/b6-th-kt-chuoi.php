<?php
function isFirstLetterUpperCase($str){
    $regexp = '/^[a-z]/';
    if(preg_match($regexp, $str)){
        echo ("la hoa");
    
    }else{
        echo ("khong phai hoa");
    }
}

// isFirstLetterUpperCase('Codegym');
// isFirstLetterUpperCase('cdegym');