<?php
require 'database.php';
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
    if(!empty($_POST['email'])){  
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        if( !empty($_POST['password'])){ 
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $query = " SELECT * FROM admin WHERE email = '{$email}' AND password = '{$password}'";
            $selectAdmin = mysqli_query($conn, $query);

            if(!$selectAdmin){
                die("Try again." . mysqli_error($conn));
            }

            while($row = mysqli_fetch_assoc($selectAdmin)){
                $db_email = $row['email'];
                $db_username = $row['username'];
                $db_password = $row['password'];
            }

            if($email === $db_email && $password === $db_password){
                header("Location: ../admin.php");
                $_SESSION['username'] = $db_username;
                $_SESSION['error'] = null;
            // } else if ($email !== $db_email && $password === $db_password){
            //     header("Location: ./login.php");
            //     $_SESSION['error'] = 'Email is wrong!';
            //     $_SESSION['username'] = null;
            // } else if ($email === $db_email && $password !== $db_password){
            //     header("Location: ./login.php");
            //     $_SESSION['error'] = 'Password is wrong!';
            //     $_SESSION['username'] = null;
            } else {
                header("Location: ../login.php");
                $_SESSION['error'] = 'Email or password is wrong!';
                $_SESSION['username'] = null;
            }
            

        } else {
            header("Location: ../login.php");
            $_SESSION['error'] = "Please enter password!";
        }
    } else {
        header("Location: ../login.php");
        $_SESSION['error'] = "Please enter email!";
    }
}

 ?>