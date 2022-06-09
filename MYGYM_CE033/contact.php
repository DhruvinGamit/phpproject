<?php

session_start();

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "member";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->close();


?>
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
       body {
    font-family: Arial, Helvetica, sans-serif;
    background-image :url('804836.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
    </style>
  </head>
  <body>

    <div class="topnav" id="myTopnav">
      <a href="index.html" class="active"> Home </a>
      <a href="members.php"> Membership </a>
      
     
      <div class="from_right_nav" id="rightnav">
        <a href="contact.php" >Contact us </a>
        <a
          href="https://www.instagram.com/gamit.dhruvin/"
          class="fa fa-instagram"
        ></a>
        <a href="#" class="fa fa-facebook"></a>
        <a
          href="https://www.linkedin.com/in/dhruvin-gamit-1493b023a"
          class="fa fa-linkedin"
        ></a>
        <a href="https://twitter.com/DhruvinGamit21" class="fa fa-twitter"></a>
        </a>
      </div>
    </div>



<!DOCTYPE html>

<br><br>

<html lang="en">
<div style="font-size: 31px; color: white">
    <form action="mailto:dhruving21@gmail.com" method="post" enctype="text/plain">
    NAME: <input type="text" name="name">
     <br><br>
    YOUR MESSAGE: <input type="text" name="message"  placeholder="Query">
    <br><br>
    <button type="submit" style="font-size: 21px" >send mail</button>
    </form>
</div>
</body>
</html> 

