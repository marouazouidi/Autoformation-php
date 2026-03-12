<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $_SESSION['language'] = $_POST['language'];
    header("Location: page3.php");
    exit();

}

?>
<h1>Step 2</h1>
<form method="POST">
<label for=""> What is your Favorite Programming Language?:</label>
<input type="text" name="language">
<button>Next</button>
</form>