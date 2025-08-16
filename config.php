
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "webt1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error() );
}

else {
    // echo "<script>alert('Database Connected successfully!')</script>";
} 


?>