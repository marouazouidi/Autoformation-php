<?php
$friends = [
    "Ali" => 50,
    "Sara" => 120,
    "Youssef" => 80,
    "Nadia" => 200,
    "Karim" => 40
];

$total = 0;
foreach( $friends as $name => $debt) {
    $total = $total + $debt;
}

echo "Friends : Debt<br>";

foreach( $friends as $name => $debt) {
    if ($debt > 100) {
        echo"<mark> $name </mark> : $debt  DH <br>";
    }
    else {
        echo" $name :  $debt  DH <br>";
    }
}
echo "---------------------------<br>";
echo "Totale  : $total DH <br>";
?>

