<?php
$servername = "localhost";
$username = "root";
$password = "$4mollymol";
$dbname = "bookstore";

$bookconn = mysqli_connect($servername, $username, $password, $dbname );
// Check connection
if (!$bookconn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
