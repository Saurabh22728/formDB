<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password =  $_POST['pass'];
    $dob =  $_POST['dob'];
    $gender = $_POST['gender'];
    $sql = "insert into data(fname,lname,email,password,dob,gender) values('$fname','$lname','$email','$password','$dob','$gender')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script> alert('New Record Inserted')</script>";
    }
    else{
        echo "error:" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>