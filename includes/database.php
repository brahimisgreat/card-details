<?php

$db_server = "localhost";
$db_user = "root"; 
$db_password = "";
$db_name = "carddetails";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if ($conn) {
  echo "Connected to the database";
} else {
  echo "Failed to connect to the database";
}