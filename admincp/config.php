<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "datn_qlbg";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

$sql = "SELECT * FROM san_pham order by created_at ";


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected successfully";


}
$result = mysqli_query($conn, $sql);
$san_pham = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
var_dump($san_pham);