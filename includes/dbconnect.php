<?php
$server = "sql301.infinityfree.com";
$username = "if0_36570773";
$password = "Ademart07";
$dbname = "if0_36570773_dglitch";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn){
    die("Connection Failure". mysqli_connect_error());
}