<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $full_name = $_POST["full-name"];
    $gender = $_POST["gender"];
    $doctor_name = $_POST["doctor-name"];
    $age = $_POST["age"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $appointment_date = $_POST["appointment-date"];

    
    $sql = "INSERT INTO booking (full_name, gender, doctor_name, age, city, state, appointment_date)
            VALUES ('$full_name', '$gender', '$doctor_name', '$age', '$city', '$state', '$appointment_date')";

    
    if ($conn->query($sql) === TRUE) {
        
        header("Location: Payment.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
 
