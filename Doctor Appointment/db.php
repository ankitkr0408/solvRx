<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';


$sql = "INSERT INTO feedback (name, email, subject) VALUES (?, ?, ?)";


$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $subject);


if ($stmt->execute()) {
    echo "Your Feedback Sent Successfully";
} else {
    echo "Error: " . $conn->error;
}


$stmt->close();
$conn->close();




