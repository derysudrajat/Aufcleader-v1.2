<?php
$servername = "localhost";
$username = "id4841422_dht";
$password = "auf1234";
$dbname = "id4841422_dht11";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$waktu = date("Y-m-d H:i:s");
$suhu =$ GET['suhu'];
$sql = "INSERT INTO sensorDHT11 (WAKTU, SUHU)
VALUES ('" .  $waktu."','" .  $suhu."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 