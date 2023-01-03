<?php 
//Defines a named constant
define('DB_HOST', 'localhost');
define('DB_USER', 'oybek');
define('DB_PASS', '123');
define('DB_NAME', 'feedback');

//create a connection
//mysqli is an api that creates a connection between PHP and a MySQL database.
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check if connected
if($conn->connect_error){
  die('Connection Failed ' . $conn->connect_error);
}

echo 'Connected! Hi ' . ucfirst(DB_USER) .'.';