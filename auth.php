
<?php
// Starting a session for a user
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
