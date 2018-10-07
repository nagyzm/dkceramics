<?php
	$firstName = $_POST["first_name"];
	$lastName = $_POST["last_name"];
	$email = $_POST["email"];
	$buy = $_POST["buy"];
 // Prepare db connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dkceramics";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
	die("connection failed: ".$conn->connect_error);
}

// Prepare Statement and bind values

$stmt = $conn->prepare("INSERT INTO clients (firstname,lastname,email,buy) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $firstName,$lastName,$email,$buy);
$stmt->execute();

mysqli_stmt_close($stmt);
mysqli_close($conn);
header("Location:clients.php")
?>