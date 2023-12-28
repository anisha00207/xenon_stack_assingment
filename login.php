<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
       
        .error-message {
            color: red;
            margin-top: 10px;
        }
        body { 
  background-image: url("2.jpg"); 
  background-position: center; 
  background-repeat: no-repeat;
  background-size: cover; }
 

    </style>
</head>
<body>
   
  
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="login.php" class="signup-form">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br>
            <input type="submit" value="Login">

            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && (!isset($row) || !password_verify($password, $row['password']))): ?>
                <p class="error-message">Invalid credentials. Please try again.</p>
            <?php endif; ?>

            <p>Don't have an account? <a href="index.php">Register here</a></p>
        </form>
    </div>
</body>
</html>

<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
        } 
    } else {
       
        $row = null;
    }
}

$conn->close();
?>
