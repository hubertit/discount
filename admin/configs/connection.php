<?php
$db_host="localhost";
$db_user="root";
$db_password="mysql";
$db_name="Discrounts";

$connection = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die(mysqli_error($connection));
?>
