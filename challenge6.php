<?php
$products = [ 
    ["name" => "Laptop" , "category" => "tech"],
    ["name" => "Phone" , "category" => "tech"],
    ["name" => "Tablet" , "category" => "tech"],
    ["name" => "Chair" , "category" => "furniture"],
    ["name" => "Desk" , "category" => "furniture"]
];

if (isset($_GET["category"])){
    $category = $_GET["category"];

    $products = array_filter($products , function($product) use ($category){
        return $product["category"] == $category;
    });
};


if (isset($_GET["sort"])){
    // if ($_GET["sort"] === "asc"){
    //     sort($products,SORT_REGULAR);
    // }
    // if ($_GET["sort"] === "desc"){
    //     rsort($products, SORT_REGULAR);
    // }
    if($_GET['sort'] == "asc"){
        usort($products, function($a,$b){
            return strcmp($a['name'],$b['name']);
        });
    }

    if($_GET['sort'] == "desc"){
        usort($products, function($a,$b){
            return strcmp($b['name'],$a['name']);
        });
    }

}

?>

<h1>Product Catalog</h1>
<h3>Filter</h3>
<a href="?category=tech">Tech</a>
<a href="?category=furniture">Furniture</a>
<a href="?">ALL</a>

<h3>Sort Proucts</h3>
<a href="?sort=asc">Sort A-Z</a> |
<a href="?sort=desc">Sort Z-A</a>
<ul>
    <?php
    foreach($products as $product){
        echo "<Li>" . $product["name"] . "</li>";
    }
    ?>
</ul>