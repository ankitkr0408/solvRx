<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SolvRX</title>
    <link rel="stylesheet" href="./index.css" />
</head>
<body>
<body>
    <div class="topnav">
        <div class="welcome"> 
            <?php
            
            session_start();
            
            
            if(isset($_POST['signup'])) {
                echo '<p>Welcome, ' . $name['name'] . '!</p>';
            }
            ?>
        </div>
        <a class="active split" href="./index.html">Home</a>
        <a href="./Login1.html">Login / Sign Up</a>
        <a href="./Appointment.html">Book an Appointment</a>
        <a href="./Contact.php">Feedback</a>
        <a href="./about.html">About</a>
    </div>

    <div>
      <h1 class="header">&nbsp;&nbsp;&nbsp;SolvRX</h1>
      <hr />
    </div>

    <br /><br />
    <h1 class="one">Welcome TO SolvRx</h1>
    <br /><br />

    <div class="hi">
      <p>
        Experience the ease of scheduling appointments at your convenience,
        eliminating the hassle of waiting rooms and long wait times.
      </p>
    </div>

    <div id="video-container">
      <video autoplay loop muted>
        <source src="./Images/Untitled design.mp4" type="video/mp4" />
        Your browser does not support the video tag.</video
      ><br /><br />
    </div>

    <div class="m">
      <hr />
      <h1><br /><br />Consult top doctors online for any health concern</h1>
    </div>

    <div class="gallery-container">
      <div class="gallery">
        <div class="image-container">
          <img src="./Images/sp-dentist@2x.jpg" alt="Image 1" />
          <div class="description">Dentist</div>
        </div>
        <div class="image-container">
          <img src="./Images/sp-gynecologist@2x.jpg" alt="Image 2" />
          <div class="description">Gynecologist</div>
        </div>
        <div class="image-container">
          <img src="./Images/sp-dietitian@2x.jpg" alt="Image 3" />
          <div class="description">Dietitian</div>
        </div>

        <div class="image-container">
          <img src="./Images/sp-general-doctor@2x.jpg" alt="Image 5" />
          <div class="description">General-doctor</div>
        </div>

        <div class="image-container">
          <img src="./Images/sp-orthopedist@2x.jpg" alt="Image 6" />
          <div class="description">Orthopedist</div>
        </div>
        <div class="image-container">
          <img src="./Images/sp-physiotherapist@2x.jpg" alt="Image 7" />
          <div class="description">Physiotherapist</div>
        </div>
       
      </div>

      <script src="./Indexs.js"></script>
    <br /><br />

    <div class="content">
      <div class="text-content">
        <h1 class="trust">
          India's&nbsp;&nbsp; Most&nbsp;&nbsp;Trusted&nbsp;&nbsp;Online
          &nbsp;&nbsp;consultation
        </h1>
        <h2 class="s">SolvRX</h2>
        <hr />
        <h3>
          Introducing SolvRX, your premier destination for convenient online
          doctor appointments. With SolvRX, access to healthcare is just a click
          away. Our innovative platform connects you with experienced physicians
          and specialists, offering virtual consultations from the comfort of
          your home or office.<br /><br />Join SolveRX today and take control of
          your health journey. Quality care, anytime, anywhere.
        </h3>
      </div>
    </div>
    <footer>
      <p>SolveRX</p>
      <p>&copy; 2024 SolvRX. All rights reserved.</p>
    </footer>
  </body>
</html> 
