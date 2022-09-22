<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$dbname = "to_do_list";

try{
    $conn = new PDO("mysql:host=$sName;dbname=$dbname", $uName,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection Failed" . $e->getMessage();
}