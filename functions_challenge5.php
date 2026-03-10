<?php
function manualReverse($text){

    $result = "";
    for ($i = strlen($text)-1 ; $i >= 0 ; $i-- ){
        $result = $result . $text[$i];
    }
    return $result;
}

echo manualReverse("hello")
?>