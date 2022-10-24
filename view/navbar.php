<nav class="navbar container bg-light">
    <a class="navbar-brand" href="index.php">Gym Title</a>
    <?php if(isset($_SESSION['email'])){ ?>
    <div>
        <li class="nav-item">
            <a class="nav-link" href="">Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php?session=end">Sign Out</a>
        </li>
    </div>
    <?php } else { ?>
    <li class="nav-item">
        <a class="nav-link" href="login.php">Sign In</a>
    </li>
    <?php } ?>
</nav>