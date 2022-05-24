<?php
$servername = "localhost";
$username = "sagar";
$password = "sagar@123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("ooops, Connection failed:  " . $conn->connect_error);
}
echo "Connected successfully, great(:)";
?>