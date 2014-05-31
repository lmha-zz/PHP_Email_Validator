<?php
session_start();

$message = implode('', $_SESSION['success_message']);

echo "<div class='success'>{$message}</div>";

?>

<link rel="stylesheet" type="text/css" href="css.css">