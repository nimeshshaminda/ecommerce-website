<?php
// Database configuration
$dbHost = 'localhost'; // Hostname
$dbUsername = 'root'; // Database username
$dbPassword = ''; // Database password
$dbName = 'girlee'; // Database name

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful"; // Debug message
}

// Function to execute SQL queries
function executeQuery($sql) {
    global $conn;
    $result = $conn->query($sql);
    return $result;
}

// Close database connection
function closeConnection() {
    global $conn;
    $conn->close();
}
?>
