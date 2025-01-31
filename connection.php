<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "enc";

$con = new mysqli($severname, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection Failed: ");
}
?>