<?php
  include 'dbcon.php';
  session_start();
  error_reporting(0);
  if(isset($_SESSION['name'])){
    header("Location: login.php");
}

if(isset($_POST['Submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  
  $sql ="insert into reg (name,email,phone,password)values ('$name','$email','$phone','$password')";
  $result = mysqli_query($conn,$sql);

  if($result){
    echo "<script> alert('Registration completed.')</script>";

    header("Location: login.php");
}
else {
  echo "<script> alert('Registration not completed.')</script>";
  }

}



?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="signupstyle.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <form action="process_signup.php" method="POST">
        <label for="name">Name:</label> <br />
        <input type="text" id="name" name="name" required />
        <br />

        <label for="email">Email:</label> <br />
        <input type="email" id="email" name="email" required />
        <br />
        <label for="phone">Phone:</label> <br />
        <input type="tel" id="phone" name="phone" required />
        <br />
        <label for="password">Password:</label> <br />
        <input type="password" id="password" name="password" required />
        <br />
        <input type="submit" value="Sign Up" />
      </form>

      <p class="ch">Already have an account? <a href="login.php">Login</a></p>
    </div>
  </body>
</html>
