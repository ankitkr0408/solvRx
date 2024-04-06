<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['signin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

 
  $hashed_password = hash('sha256', $password); 

  
  $stmt = $conn->prepare("SELECT * FROM loginsignup WHERE email=? AND hashed_password=?");
  $stmt->bind_param("ss", $email, $hashed_password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
   
   header("Location: indexs.php");
    exit(); 
  } else {
   
    echo "Invalid email or password.";
  }
}


if (isset($_POST['signup'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

 
  $hashed_password = hash('sha256', $password); 

  
  $check_email_sql = "SELECT * FROM loginsignup WHERE email='$email'";
  $check_email_result = $conn->query($check_email_sql);

  if ($check_email_result->num_rows > 0) {
    echo "Email already exists. Please choose a different one.";
  } else {
    
    $insert_sql = "INSERT INTO loginsignup (name, email, hashed_password) VALUES ('$name', '$email', '$hashed_password')";
    if ($conn->query($insert_sql) === TRUE) {
      echo "New record created successfully!";
    } else {
      echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
  }
}

$conn->close();
 




 
 
 