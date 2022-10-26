<?php include 'view/header.php' ?>
<?php include 'view/navbar.php' ?>

<?php include './model/database.php' ?>

<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = mysqli_real_escape_string($data, $_POST['email']);
            if(isset($_POST['password']) && !empty($_POST['password'])){
                $password = mysqli_real_escape_string($data, $_POST['password']);
            } else {
                $error = "Please enter password";
            }
        } else {
        $error = "Please enter email";
        }

        $query = " SELECT * FROM admin WHERE email = '{$email}' and password = '{$password}'";
        $selectAdmin = mysqli_query($data, $query);

        if(!$selectAdmin){
            die("Try again." . mysqli_error($data));
        }
    } 
    
    // if(isset($_GET['session'])){
    //     if($_GET['session']=='end'){
    //         end_session();
    //     }
    // }

 ?>

<div class="login-page">
    <div class="login">
        <div>
            <h3 class="mb-4">Login to Gym Title Management System</h3>
        </div>
        <div>
            <form class="login-form" method="post" action="">
                <div class="mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="form-input">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="name@example.com">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="form-input">
                        <input type="password" name="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                <!-- <a class="" href="register">Don't have an account? Sign Up!</a> -->
                
                <button type="submit" class="btn login-btn" name="submit-btn">Login</button>
                <p class="form-info">
                    <?php
                    if(isset($_POST['submit'])){
                        if(!empty($email) && !empty($password)){
                            
                        } else {
                            echo $error;
                        }
                    } 
                    ?>
                </p>
            </form>
        </div>
    </div>
</div>

<?php include 'view/footer.php' ?>