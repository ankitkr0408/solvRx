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
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $cardName = $_POST["cardName"];
    $cardNum = $_POST["cardNum"];
    $expMonth = $_POST["expMonth"];
    $expYear = $_POST["expYear"];
    $cvv = $_POST["cvv"];

    
    $sql = "INSERT INTO payments (full_name, email, address, city, state, zip, card_name, card_number, exp_month, exp_year, cvv, payment_time)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())"; 

    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssss", $name, $email, $address, $city, $state, $zip, $cardName, $cardNum, $expMonth, $expYear, $cvv);

    
    if ($stmt->execute()) {
        
        header("Location: Cart.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    
    $stmt->close();
}


$conn->close();

