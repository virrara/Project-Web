<?php
include "config.php";
if(!empty($_POST))
{  
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $damount = mysqli_real_escape_string($conn, $_POST['damount']);
    $card_num = mysqli_real_escape_string($conn, $_POST['card_num']);

$query = "INSERT INTO `donation`(`fname`, `lname`, `email`, `phone`, `street`, `city`, `zip`, `damount`, `card_num`) 
VALUES ('$fname','$lname','$email','$phone','$street','$city','$zip','$damount','$card_num')";

$query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Thank You For Donations!"); </script>';
        echo '<script> alert("Thank You For Donations!"); </script>';
        echo '<script> alert("Thank You For Donations!"); </script>';
        header("location:thanks-donate.php");
    }
    else
    {
        echo '<script> alert("Sorry, Try later again:("); </script>';
    }
}
?>