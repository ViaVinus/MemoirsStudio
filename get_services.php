<?php
$servername = 'localhost';
    $username = 'u936666569_admin'; 
    $password = 'Memors123';
    $dbname = 'u936666569_memoirsstudio';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM services";
$result = $conn->query($sql);

$services = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $services[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($services);
?>
