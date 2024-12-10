<?php
include "config.php";
if(!empty($_POST))
{  
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $trans = mysqli_real_escape_string($conn, $_POST['trans']);
    $dicipline = mysqli_real_escape_string($conn, $_POST['dicipline']);
    $reason = mysqli_real_escape_string($conn, $_POST['reason']);
    $day = mysqli_real_escape_string($conn, $_POST['day']);
    $organisasi = mysqli_real_escape_string($conn, $_POST['organisasi']);
    $experience = mysqli_real_escape_string($conn, $_POST['experience']);

    $query = "INSERT INTO `volunteer`(`fname`, `lname`, `email`, `phone`, `address`, `age`, `trans`, `dicipline`, `reason`, `day`, `organisasi`, `experience`) 
    VALUES ('$fname','$lname','$email','$phone','$address','$age','$trans','$dicipline','$reason','$day','$organisasi','$experience')";

$query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Thank You For Donations!"); </script>';
        echo '<script> alert("Thank You For Donations!"); </script>';
        echo '<script> alert("Thank You For Donations!"); </script>';
        header("location:thanks-volunteer.php");
    }
    else
    {
        echo '<script> alert("Sorry, Try later again:("); </script>';
    }
}
?>