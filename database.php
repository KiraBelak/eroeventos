<?php
$server = 'localhost';
$username = 'root';
$pass ='';
$databasee='eronew';
try{
$conn =new PDO("mysql:host=$server;dbname=$databasee",$username,$pass);
}catch(PDOException $e){
die('conect failed:'.$e->getMessage());
}
?>