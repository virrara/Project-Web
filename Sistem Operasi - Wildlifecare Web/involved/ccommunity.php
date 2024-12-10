<?php
include "config.php";
if(!empty($_POST))
{  
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

$query = "INSERT INTO `community`(`fname`, `lname`, `email`) 
VALUES ('$fname','$lname','$email')";

$query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Thank You For Donations!"); </script>';
        echo '<script> alert("Thank You For Donations!"); </script>';
        echo '<script> alert("Thank You For Donations!"); </script>';
        header("location:thanks-community.php");
    }
    else
    {
        echo '<script> alert("Sorry, Try later again:("); </script>';
    }
}
?>