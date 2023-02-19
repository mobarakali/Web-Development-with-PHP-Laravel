<?php
$str = "I love my Bangladesh very much";

function largestWord($str){
    $strAsArray = explode(' ', $str);
    // callback Function
    function wordLength($word){
        return strlen($word);
    }

    $strLengts = array_map('wordLength', $strAsArray );

    $fliped = array_flip($strLengts);

    krsort($fliped);
    
    $fliped = array_flip($fliped);

    return $strAsArray[array_key_first($fliped)];
}
echo largestWord($str);