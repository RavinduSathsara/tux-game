<?php 

$severName = "localhost";
$userName = "root";
$passWord = "";
$database = "game";

$conn = new mysqli($severName,$userName,$passWord,$database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }

//   echo "Connected successfully";

?>