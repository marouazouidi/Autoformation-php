<?php

require 'db.php';
$minprice = 50;

$sql = "select * FROM `library_books` where price > :price;";

$stmt = $pdo->prepare($sql);
$stmt->execute(['price' => $minprice]);

$books = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>

<h2>Books with price greater than <?php echo $minprice ?> DH</h2>
<ul>
    <?php
    foreach($books as $book){
        echo "<Li>" . $book["title"] . "</li>";
    }
    ?>
</ul>