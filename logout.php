
<?php
session_start();
if(session_destroy()) // Destroying all sessions
{
header("Location: login.php"); // Redirecting to home page
}
?>
