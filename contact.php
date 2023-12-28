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
  <link rel="stylesheet" href="contact.css">
<style>
    background-color: black;
    </style>
  
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
  <div class="form">
  <h1 class="lia">CONTACT US</h1>

  <!-- Your language selection form here -->

  <span class="lia"><?php 
        if (isset($_GET['message'])) {
    $success_message = $_GET['message'];
    echo '<p class="success-message">' . $success_message . '</p>';
}?></span>

  <form method="post" action="process_contact.php" class="contact-form">
            









    
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>" required>
            <span class="error"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></span>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
            <span class="error"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></span>

            <label for="phn">Phone Number:</label>
            <input type="text" name="phn" value="<?php echo isset($phn) ? $phn : ''; ?>" required>
            <span class="error"><?php echo isset($errors['phn']) ? $errors['phn'] : ''; ?></span>
<br>
<br>
<br>
            <input type="submit" value="Submit">
       



































        </form>

     

</div>

</body>

</html>
