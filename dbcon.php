<?php
 $conn = new mysqli("localhost","root","","authentication");
 
 if ($conn -> connect_errno) {
   echo "Failed to connect to MySQL: " . $conn -> connect_error;
   exit();
 }
 else{
    echo"db connected";
 }
 ?> 
