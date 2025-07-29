Include MySQL setup, firewall commands, test PHP page, db_check.php, and main.php code

<?php
$servername = "DbServer IP";
$username = "udc";
$password = "Password(you should give)";
$dbname = "udc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($conn->ping()) {
  echo "MySQL server connection is alive.";
} else {
  echo "MySQL server connection is not alive.";
}
$conn->close();
?>
