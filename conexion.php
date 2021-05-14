<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','ovp');
/*
define('DB_HOST','db5002462497.hosting-data.io');
define('DB_USER','dbu1383769');
define('DB_PASS','3lR10Quefluye');
define('DB_NAME','dbs1963584');
*/
//Bucle try para la conexion con la base de datos
try{
// Ejecutamos las variables y aplicamos UTF8
$con = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
