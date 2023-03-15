<?php

    $host="localhost";
    $user="root";
    $password="";
    $db="gym-management-system";

    $conn=mysqli_connect($host, $user, $password, $db);

    if(!$conn){
        die("Connection Error" . mysqli_connect_error());
    }

?>