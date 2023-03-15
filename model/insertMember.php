<?php
require 'database.php';

if(isset($_POST['member-submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $membershipPlan = $_POST['membership-plan'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $dateOfBirth = $_POST['date-of-birth'];

    $query = "INSERT INTO members (`id`,`first name`, `last name`, `email`, `membership plan`, `address`, `city`, `date of birth`) 
                VALUES('', '$fname', '$lname', '$email', '$membershipPlan', '$address', '$city', '$dateOfBirth')";
    if(mysqli_query($conn, $query)){
        header("Location: ../newMemberAdded.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>