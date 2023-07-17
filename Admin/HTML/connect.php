<?php
$server = "localhost";
$name = "root";
$password = "";
$database = "mdc";

$conn = new mysqli($server,$name,$password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>