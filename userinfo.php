<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$projectdesc = $_POST['projectdesc'];

$servername = "localhost";
$username = "root";
$password = "1234";
$db="messageservice";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected was successfully";



$query="INSERT INTO messages(name, email, subject, projectdesc) VALUES('$name', '$email', '$subject', '$projectdesc')";
mysqli_query($conn, $query);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button type="button" onClick="index.html">Click me To go Home</button>
</body>
</html>