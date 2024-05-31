
<?php
 $servername = 'localhost';
    $username = 'u936666569_admin'; 
    $password = 'Memors123';
    $dbname = 'u936666569_memoirsstudio';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>