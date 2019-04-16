<?php
// Creating connection with a database on localhost
$connection = mysql_connect('localhost', 'root', '',"userDb");
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('userDb');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>
