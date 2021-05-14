<?php 
/*
$server = "localhost";
$user = "root";
$password = "";
$db = "ovp";
*/
$server = "db5002462497.hosting-data.io";
$user = "dbu1383769";
$password = "3lR10Quefluye";
$db = "dbs1963584";

$con = mysqli_connect($server, $user, $password, $db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>