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
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$phoneNumber = $_POST['phoneNumber'];
$streetNumber = $_POST['streetNumber'];
$streetName = $_POST['streetName'];
$city = $_POST['city'];
$postcode = $_POST['postcode'];
$country = $_POST['country'];

// Insert data into database
$sql = "INSERT INTO users (email, first_name, last_name, password, gender, phone_number, street_number, street_name, city, postcode, country) 
        VALUES ('$email', '$firstName', '$lastName', '$password', '$gender', '$phoneNumber', '$streetNumber', '$streetName', '$city', '$postcode', '$country')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
