<?php

require 'db.php';

$sql = "SELECT id, name FROM categories";

$stmt = $pdo->query($sql);

$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<h2>Select Category</h2>

<select name="category_id">

    <?php foreach($categories as $category){ ?>

        <option value="<?php echo $category['id']; ?>">
            <?php echo $category['name']; ?>
        </option>

    <?php } ?>

</select>