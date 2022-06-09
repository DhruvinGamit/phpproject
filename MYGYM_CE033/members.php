<?php
session_start();
$emailErr = $passErr = $addrErr = "";
$email = $passw = $address = $gmailErr = $numErr =  "";

if (isset($_POST['submit'])) {
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  $email = $_POST['email'];

  if (strpos($email, "@gmail.com") == false) {
    $gmailErr = "Use google account only";
  }

  if (empty($_POST['numb'])) {
    $numErr = "Number is required.";
  } 
  
  if (empty($_POST['pwd'])) {
    $passErr = "Password is required";
  } 
    
  if (empty($_POST["address"])) {
    $addrErr = "Address is required";
  } 

  
$passw = $_POST['pwd'];
$num = $_POST['numb'];
$time = $_POST['time'];
$name = $_POST['name'];
$servername = "localhost";
$username = "root";
$passwor = '';
$dbname = "member";

$address = $_POST['address'];
$_SESSION["addres"] = $address;

// Create connection
$conn = new mysqli($servername, $username, $passwor, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO membership (name, email, password, address, membership, number)
VALUES ('$name','$email', '$passw', '$address', '$time', '$num')";

if($conn->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
else{
  echo "Logged In Successfully";
}

$conn->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <style> body {
    font-family: Arial, Helvetica, sans-serif;
    background-image :url('4722374.jpg');
    background-repeat: no-repeat;
    background-size: cover;

  }</style>
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




<form action = <?php echo $_SERVER['PHP_SELF']; ?> method="post">

<center>
 <br>

<fieldset >
<br><br> <br>
<div style="font-size: 31px; color: white">
<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">

  NAME: <input type="text" name="name">
  <br><br>

  Email: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr; echo $gmailErr?></span>
  <br><br>


  Password: <input type="password" name="pwd">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  Mobile Number: <input type="text" name="numb">
  <span class="error">* <?php echo $numErr;?></span>
  <br><br>

  Membership Period:( in months) <input type="text" name="time">
  <br><br>

  Address: <input type="text" name="address">
  <span class="error"><?php echo $addrErr;?></span>

  <br><br>
  <input type="submit" style="font-size: 21px" name="submit" value="Submit">  
</form>
</div>
<br><br> <br>
</fieldset>

</center>

</form>





