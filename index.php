<?php include 'view/header.php' ?>
<style>
    <?php include 'css/style.css' ?>
</style>

<div class="landing-page">
    <img class="gym-landing" src="./assets/gym.jpg" alt="Gym photo" />
    <div class="welcome-text">
        <h1>
            Welcome to the Predator Fitness Management System
        </h1>
        <form method="get" action="login.php">
            <button type="submit" class="btn login-btn" name="submit-btn">Sign In</button>
        </form>
    </div>
</div>

<?php include 'view/footer.php' ?>