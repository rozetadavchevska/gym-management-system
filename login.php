<?php include 'view/header.php'; ?>
<style>
    <?php include 'css/login.css' ?>
</style>

<div class="login-page">
    <div class="login">
        <div>
            <h3 class="mb-4">Login to Predator Fitness Management System</h3>
        </div>
        <div>
            <form class="login-form" method="post" action="model/loginCheck.php">
                <div class="col-12 mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="form-input">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="name@example.com">
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="form-input">
                        <input type="password" name="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                <button type="submit" class="btn login-btn" name="submit-btn">Login</button>
                <span class="displayError">
							<?php 
                                if (isset($_SESSION['error'])) {
									echo $_SESSION['error'];
								}
							?>
				</span>
            </form>
        </div>
    </div>
</div>

<?php include 'view/footer.php'; ?>