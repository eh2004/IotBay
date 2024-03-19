<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
// Add more variables for additional inputs

// Insert data into database
$sql = "INSERT INTO your_table (column1, column2) VALUES ('$input1', '$input2')";
// Adjust column names and table name accordingly

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
