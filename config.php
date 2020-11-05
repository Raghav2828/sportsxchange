<?php
$host = "localhost:3306";
$userName = "id15105424_raghav";
$password = "%9lyDvdVn3TW2E>X";
$dbName = "id15105424_subscribe";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>