<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Token Conformed</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.split {
  float: left;
  background-color: #04aa6d;
  color: white;
}

.topnav a.sp {
  float: left;
  background-color: #04aa6d;
  color: white;
}
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .booking-info {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
      <div class="topnav">
      <a href="./Login1.php">Login /Sign Up</a>
      <a class="active split" href="./indexs.php">Home</a>
      <a href="#book">Book an Appointment</a>
      <a href="./Contact.php">Feedback</a>
      <a href="./about.html">About</a>
    </div>
    <div class="container">
        <h1>Booking Confirmation</h1>
        <div class="booking-info">
            <?php
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "contact";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            
            $sql = "SELECT * FROM booking ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<p><strong>Full Name:</strong> " . $row["full_name"] . "</p>";
                echo "<p><strong>Gender:</strong> " . $row["gender"] . "</p>";
                echo "<p><strong>Doctor Name:</strong> " . $row["doctor_name"] . "</p>";
                echo "<p><strong>Age:</strong> " . $row["age"] . "</p>";
                echo "<p><strong>City:</strong> " . $row["city"] . "</p>";
                echo "<p><strong>State:</strong> " . $row["state"] . "</p>";
                echo "<p><strong>Appointment Date:</strong> " . $row["appointment_date"] . "</p>";
            } else {
                echo "No booking information found.";
            }

            $conn->close();
            ?>
        
</body>
</html>


