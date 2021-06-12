<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "galuhlibrary";

$db = mysqli_connect($server, $user, $password, $dbname);

if( !$db ){
    die("Database connections failed: " . mysqli_connect_error());
}
?>