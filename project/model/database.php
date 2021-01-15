<?php


$dbhost =$_SERVER['mydbinstancetest.ca64pvzpp2bj.eu-west-1.rds.amazonaws.com'];
$dbport = $_SERVER['3306'];
$dbname = $_SERVER['game'];
$charset = 'utf8' ;

$dsn = "mysql:host=localhost;dbname=gameshop";
$username = "root";
$password = "";
 
$pdo = new PDO($dsn, $username, $password);
try {
    $db = new PDO($dsn, $username, $password);
    //set up error reporting on server
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_reporting(E_ALL);
} catch (PDOException $ex) {
    //echo "Connection Failure Error is " . $ex->getMessage();
    // redirect to an error page passing the error message
    header("Location:error.php?msg=" . $ex->getMessage());

}
