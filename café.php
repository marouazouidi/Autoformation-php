<?php

$price = 3;
$tea = 6;
$Student = false;

$total = $price * $tea;

if($tea > 5){
    $total = $total - $tea;
}

if($Student){
    $total = $total * 0.8;
}

echo "Total: " . $total . " DH";

?>

