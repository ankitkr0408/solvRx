<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedback Form</title>
    <link rel="stylesheet" href="contact.css" />
</head>

<body>
<nav>
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>

    <div class="topnav">
        <a href="./Login1.php">Login /Sign Up</a>
        <a class="active split" href="./index.html">Home</a>
        <a href="./Appointment.html">Book an Appointment</a>
        <a href="./Contact.php">Feedback</a>
        <a href="./about.html">About</a>
    </div>
</nav>
<div class="container">
    <h1>Contact Us</h1>
    <p>
        Have questions or need assistance? Please fill out the form below, and
        we'll get back to you as soon as possible.
    </p>
    <form action="./db.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required />

      

        <input type="submit" value="Submit" />
    </form>
</div>
</body>
</html>
