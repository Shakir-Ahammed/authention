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
    //$time = date("Y/m/d");
    // $upby = $_SESSION['name'];


    echo $name . $email . $mobile . $gender . $dob . $regi . $salary . $status;


    //$query1="INSERT INTO emp`( name`, email, mobile, gender, date, salary, updateby, createby, editby, deleteby) VALUES ('$name','$email','$mobile','$gender','$date','$salary','$session','$session','$session','$session')";


    $query = "INSERT INTO `emp`(`name`, `email`, `mobile`, `gender`, `dateofb`, `Regignition`, `Salary`, `Status` ) 
VALUES ('$name','$email',$mobile,'$gender','$dob','$regi',$salary,$status)";



    if (mysqli_query($conn, $query)) {
        echo "data has inserted";

        header("Location:empolyee.php");
        echo "queerry ended from if";

        ///imranhossain@ba-systems.com


    } else {
        echo "employee add failed";
        //header("Location:empolyee.php");
        echo "queerry ended from else";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="empstyle.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" />

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" />

    <!-- Latest compiled and minified JavaScript -->
    <title>Document</title>
</head>

<body>
    <div class="con">
        <h1 class="title">Employee List</h1>
        <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" id="addemp" data-toggle="modal" data-target="#exampleModalCenter">
                AddEmployee
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">
                                Add Employee
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-div">
                                <h3>Add new employee</h3>
                                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="emp-name">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="emp-email">
                                    </div>

                                    <div class="form-group">
                                        <label for="mobile">Mobile number</label>
                                        <input type="number" class="form-control" name="mobile" id="emp-mobile">
                                    </div>

                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <input type="text" class="form-control" name="gender" id="emp-gender">
                                    </div>

                                    <div class="form-group">
                                        <label for="dob">Date of birth</label>
                                        <input type="date" class="form-control" name="dateofb" id="emp-dob">
                                    </div>

                                    <div class="form-group">
                                        <label for="regig">Regignition</label>
                                        <input type="text" class="form-control" name="Regignition" id="emp-regig">
                                    </div>

                                    <div class="form-group">
                                        <label for="salary">Salary</label>
                                        <input type="number" class="form-control" name="Salary" id="emp-salary">
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <div>

                                            <input type="radio" class="" value='1' name="Status">
                                            <label for="Status">Active</label>
                                        </div>
                                        <div>
                                            <input type="radio" class="" value='0' name="Status">
                                            <label for="status-2">Inactive</label>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="form-control btn btn-primary" name="submit" value="add">
                                    </div>
                                </form>

                            </div>



                        </div>


                    </div>
                    <div class="modal-footer">
                        <!-- <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                    >
                    Close
                    </button>
                    <button type="button" class="btn btn-primary">Save</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Regignition</th>
            <th>Salary</th>
            <th> Status </th>
            <?php $sql = "select * from emp";
            $result = mysqli_query($conn, $sql) or die("failed");
            $output = "";
            if (mysqli_num_rows($result) > 0) {
                $output;

                while ($row = mysqli_fetch_assoc($result)) {
                    $output .= "<tr>
                             <td>{$row['name']}</td>
                             <td>{$row['email']}</td>
                             <td>{$row['mobile']}</td>
                             <td>{$row['gender']}</td>
                             <td>{$row['dateofb']}</td>
                             <td>{$row['Regignition']}</td>
                             <td>{$row['Salary']}</td>
                             <td>{$row['Status']}</td>";
                }


                mysqli_close($conn);
                echo $output;
            } else {
                echo "data nai";
            }
            ?>

        </tr>


    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
</body>

</html>