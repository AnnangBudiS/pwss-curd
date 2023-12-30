<?php
$server = 'localhost';
$username = 'root';
$passowrd = '';
$dbname = 'bioskop';

$con = mysqli_connect($server, $username, $passowrd, $dbname);

if (!$con)
    die("connection error" . mysqli_connect_error);

?>