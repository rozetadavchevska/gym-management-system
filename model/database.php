<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="gym-management-system";

    $data=mysqli_connect($host, $user, $password, $db);

    if(!$data){
        die("Connection Error" . mysqli_connect_error());
    }

?>