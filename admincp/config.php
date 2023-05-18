<?php
$servername = "localhost";
$username = "root";
$password = "";
<<<<<<< HEAD

// Create connection
$conn = new mysqli($servername, $username, $password);
=======
$dbName = "datb_qlbg";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);




>>>>>>> 901269a2a4f549fc67364d87651af237d7fba6c9

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
<<<<<<< HEAD
}
echo "Connected successfully";
?>
=======
}
>>>>>>> 901269a2a4f549fc67364d87651af237d7fba6c9
