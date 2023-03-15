<?php
include 'dbcon.php';
session_start();
error_reporting(0);
if (isset($_SESSION['name'])) {
    header("Location:empolyee.php");
}


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dateofb'];
    $regi = $_POST['Regignition'];
    $salary = $_POST['Salary'];
    $status = $_POST['Status'];

    $query_run = mysqli_query($conn, "SELECT MAX(uid) as uid FROM emp");
    //$uid_fetch = mysqli_fetch_array($query_run);
    //  $uid = $uid_fetch["uid"];
    //$time = date("Y/m/d");
    //j $upby = $_SESSION['name'];
    // if ($uid != '') {
    //     $uid = 0;
    // } else {
    //     $uid++;
    // }

    if (mysqli_num_rows($query_run) > 0) {
        // Fetch the result
        $row = mysqli_fetch_assoc($query_run);
        $uid = $row['uid'];
        $uid++;
    } else {
        $uid = 0;
    }


    //echo $uid;
    foreach ($name as $index => $names) {

        $s_nanme = $names;
        $s_email = $email[$index];
        $s_mobile = $mobile[$index];
        $s_gender = $gender[$index];
        $s_dob = $dob[$index];
        $s_salary = $salary[$index];
        $s_regi = $regi[$index];
        $s_status = $status[$index];

        // echo $s_nanme . $s_email . $s_mobile . $s_gender . $s_dob . $s_salary . $s_regi . $s_status . 'index' . $index;
        // $s_session = $session;

        $query = "INSERT INTO `emp`(`name`, `email`, `mobile`, `gender`, `dateofb`, `Regignition`, `Salary`,`Status`,`uid` ) 
        VALUES ('$s_nanme','$s_email',$s_mobile,'$s_gender','$s_dob','$s_regi',$s_salary,$s_status,$uid )";

        $query_run = mysqli_query($conn, $query);
        echo $query;
    }

    // if ($query != '') {
    //     echo $query;
    //     $query_run = mysqli_multi_query($conn, $query);
    // }

    //$query1="INSERT INTO emp`( name`, email, mobile, gender, date, salary, updateby, createby, editby, deleteby) VALUES ('$name','$email','$mobile','$gender','$date','$salary','$session','$session','$session','$session')";


    //     $query = "INSERT INTO `emp`(`name`, `email`, `mobile`, `gender`, `dateofb`, `Regignition`, `Salary`, `Status` ) 
    // VALUES ('$name','$email',$mobile,'$gender','$dob','$regi',$salary,$status)";



    if ($query_run) {


        header("Location:empolyee.php");
    } else {
        echo "employee add failed";
    }
}
