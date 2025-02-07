<?php 
$conn = mysqli_connect('localhost', 'root','','php_ieee');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>