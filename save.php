<?php 

$name = $_POST["name"]; 
$description = $_POST["description"]; 
$email = $_POST["email"]; 
//connection to the database

require_once "DBManager.php";
$client = new DBManager();
$client->saveDoc($name, $email, $description);

header("Location: home.php");

?>