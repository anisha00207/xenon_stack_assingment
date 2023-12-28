<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <link rel="stylesheet" href="header.css">
 
</head>

<body>
  <div class="header">
    <img src="b.jpg" alt="Stack Edu Logo" class="logo"> 
    <ul class="nav-menu">
      <li><a href="dashboard.php">Homepage</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li class="logout"><a href="logout.php">Logout</a></li>
      <li class="signup"><a href="signup.php">Signup</a></li>
    </ul>
  </div>
<h1 class="lia">ABOUT US</h1>
</body>

</html>
