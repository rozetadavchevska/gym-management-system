<?php include 'view/header.php'; ?>

<div class="login-page">
    <div class="login">
        <div>
            <h3 class="mb-4">Login to Gym Title Management System</h3>
        </div>
        <div>
            <form class="login-form" method="post" action="model/loginCheck.php">
               
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
                <button type="submit" class="btn login-btn" name="submit-btn">Login</button>
                <span class="displayError">
							<?php 
                                if ($_SESSION['error']) {
									echo $_SESSION['error'];
								}
							?>
				</span>
            </form>
        </div>
    </div>
</div>

<?php include 'view/footer.php'; ?>