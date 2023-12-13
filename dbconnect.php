<?php


$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "news";


try {
    $conn = new PDO("mysql:host=$db_servername; dbname=$dbname", $db_username,$db_password);
}
catch (PDOException $e) {
    echo "Bazaga ulana olmadi: " . $e->getMessage();
}