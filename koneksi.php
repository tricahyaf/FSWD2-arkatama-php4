<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arkatama_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}else{
    echo "<h1>Data Pengguna</h1>";
    
}