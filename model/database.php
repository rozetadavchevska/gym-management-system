<?php
    ob_start();

    $host="localhost";
    $user="root";
    $password="";
    $db="gym-management-system";

    foreach($connect as $key => $value){
        define(strtoupper($key), $value);
    }

    $data=mysqli_connect($host, $user, $password, $db);

    if(!$data){
        die("Connection Error" . mysqli_connect_error());
    }

?>