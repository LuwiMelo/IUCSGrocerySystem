<?php 
$dsn = 'mysql:dbname=iucsproducts_db;host=localhost';
$user = 'root';
$password = '';

try {
     $dbh = new PDO($dsn, $user, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>