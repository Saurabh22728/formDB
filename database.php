<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "assign";
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
  die("Error Detected".mysqli_error($conn));
}
echo "Connected successfully";
?>