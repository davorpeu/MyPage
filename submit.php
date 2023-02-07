<?php
error_reporting(E_ALL & E_STRICT);
ini_set('display_errors', '1');

// Connect to XAMPP MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "email";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare SQL INSERT statement
$sql = "INSERT INTO email (name, email, message, date) 
VALUES (?, ?, ?, NOW())";

// Prepare statement
$stmt = mysqli_prepare($conn, $sql);

// Bind values
mysqli_stmt_bind_param($stmt, "sss", $_POST["name"], $_POST["email"], $_POST["message"]);

// Execute statement
mysqli_stmt_execute($stmt);

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);

// Redirect to form page
header("Location: contact.php?success=1");

?>
