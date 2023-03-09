<?php
  include 'dbcon.php';
  session_start();
  error_reporting(0);
  if(isset($_SESSION['name'])){
    header("Location:home.php");
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];// we can also use here md5()hass algo .

    $sql="select* from reg where email='$email'and password='$password'";
    $result= mysqli_query($conn,$sql);

    // check if the email and password are correct
    if ($result->num_rows > 0){
      $row= mysqli_fetch_assoc($result);
    $_SESSION['username']= $row ['username'];
      header("Location:home.php");
    }
    else {
      echo "<script> alert('Email or Password Wrong.')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="log">Login</h1>
      <?php if(isset($error)) { ?>
      <p><?php echo $error; ?></p>
      <?php } ?>
      <form class="logcon" method="POST" action="">
        <label>Email:</label><br />
        <input class="ibox"type="email" name="email" required /><br />
        <label>Password:</label><br />
        <input class="ibox" type="password" name="password" required /><br />
         <input type="submit" class="btn" name="submit" value="Login" />
        <!-- <a href="#" type="submit" name="submit" >Login</a> -->
        <p class="msg">
          if you don't have acount.<a href="signup.php" class="sign">Signup</a>
        </p>
      </form>
    </div>
  </body>
</html>
