<?php
session_start();
error_reporting(0);
if (isset($_SESSION['name'])) {
  header("Location:home.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="homestyle.css" />
  <title>Document</title>
</head>

<body>
  <nav class="nav">
    <a href="#">Home</a>
    <a href="empolyee.php">Employee</a>
    <a href="#">About</a>
    <a href="logout.php">Logout</a>
  </nav>
</body>

</html>