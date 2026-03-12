<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "";
    $email = "";
    $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = $_POST["nom"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        if (strpos($email,"@") === false){
            echo "Invalid email address";
        } else {
            echo "Message sent successfully";
            $name = "";
            $email = "";
            $message = "";
        }
    }
    
   
    ?>
    <h1>Contact Us</h1>

    <form action="" method="POST">
        <label for="">Name:</label><br>
        <input type="text" name="nom"  value="<?php echo $name ?>" ><br>
        <label for="">Email:</label><br>
        <input type="text" name="email" value="<?php echo $email ?>"><br>
        <label for="">Message</label><br>
        <textarea name="message"><?php echo $message ?></textarea><br>
        <input type="submit">
    </form>
</body>
</html>