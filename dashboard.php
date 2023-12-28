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
 <style>
   
  .main{
    display: flex;

}
.img{
    width:auto;
    height:100%;
}

.lia {
    text-align: center; 
    margin-top: 50px; 
 

    color: rgb(1, 0, 0); 
   
  }

.liaa {

   
margin-left:90px;

    text-align: center; 
    color:black;
   
  }

  .liaaa{

margin-top: 10px; 
margin-left:30px;
text-align: center; 
color:blue;

}
.info{
    margin-left:110px;
    width:400px;
    height:200px;
    color:white;
    background-color:black;
    border-radius:50px;
}
.infoo{
    padding:30px;
}
  #s{
    color:orange;  }

</style>
</head>

<body>
  <div class="header">
   <img src="b.jpg" class="logo"> 
    <ul class="nav-menu">
      <li><a href="dashboard.php">Homepage</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li class="logout"><a href="logout.php">Logout</a></li>
      <li class="signup"><a href="signup.php">Signup</a></li>
    </ul>
  </div>
 

  <div class="main">
 

<div class="right">
<img src="2.jpg" alt="Description of the image" class="img">
</div>
<div class="left">
<marquee>want counselling ?? book a free session with our mentor today <a href="contact.php">contact</a>today!!</marquee>
<br>
<br>
<br>
<h4 class="liaa" ><i> READ,UNDERSTAND,PRACTICE,GROW </i></h4>
<h1 class="lia">Welcome,  <?php echo $_SESSION['username'];  ?> <br><br>   to <k id="s">AUTUMN</k>education</h1>
<br>
<div class="info">
  <p class="infoo"> AUTUMN edutech is the company  that takes the mental health of their clients seriously<br>
at AUTUMN education we provide you with  a environment where  you won't be feeling anytype of pressure anymore .<br>
studying will feel great to you</p>
</div>
</div>
</div>
</body>

</html>
