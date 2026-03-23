<?php

session_start();

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

$products = ["Laptop","Phone","Tablet"];

if(isset($_POST['item'])){

    $item = $_POST['item'];

    if(!in_array($item,$_SESSION['cart'])){
        $_SESSION['cart'][] = $item;
    }

}

if(isset($_POST['clear'])){
     $_SESSION['cart'] = [];

}

$cart_count = count($_SESSION['cart']);

?>

<h2>In Cart: <?php echo $cart_count; ?> Product </h2>

<?php foreach($products as $product){ ?>

<form method="POST">

<?php echo $product; ?>

<input type="hidden" name="item" value="<?php echo $product; ?>">

<button type="submit">Add to Cart</button>

</form>

<?php } ?>
<form method="POST">
    <button type="submit" name="clear" >clear the Cart</button>
</form>


<h2>Your Cart :</h2>

<?php

if(count($_SESSION['cart']) == 0){

echo "Cart is empty";

}else{

foreach($_SESSION['cart'] as $item){

echo "<p>".$item."</p>";

}

}

?>
