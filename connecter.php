<?php
session_start();
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "gest_stock";
try {

$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
} catch(PDOException $e) {
echo $e->getMessage();
}

?>