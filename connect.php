<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $password = $_POST['pass'];
    $gender = $_POST['gender'];

    $con = new mysqli('localhost', 'root', '', 'angularTestdb');
    if ($con) {
        $sql = "insert into `signup` (fname,lname,mobile,pass,gender) values ('$firstname','$lastname','$mobile','$password','$gender')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "Data entered successfully.";
        } else {
            die(mysqli_error($con));
        }
    } else {
        die(mysqli_error($con));
    }

}

?>