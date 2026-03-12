<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $_SESSION['username'] = $_POST['username'];
    header("Location: page2.php");
    exit();


}

?>
<h1>Step 1</h1>
<form method="POST">
<label for="">Enter your name:</label>
<input type="text" name="username">
<button>Next</button>
</form>