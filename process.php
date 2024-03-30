<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detail";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the form
$Name = $_POST['name'];
$Aadhar = $_POST['adhar'];
$Mobile = $_POST['mobile'];
$Dues = $_POST['dues'];

// Insert data into the database
$sql = "INSERT INTO user (Name, Aadhar, Mobile, Dues) VALUES ('$Name', '$Aadhar','$Mobile', '$Dues')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
