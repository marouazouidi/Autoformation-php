<h1>Welome</h1>
<?php
session_start();
$username = $_SESSION['username'];
$language = $_SESSION['language'];
?>
<p> Hello <?php echo $username?> , you love <?php echo $language ?></p>
