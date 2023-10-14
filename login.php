<!DOCTYPE php>
<php>

	<head>
		<title>Login-- TX Service Hand</title>
		<link rel="icon" type="image/x-icon" href="assets/images/servicepic/title-logo.png">
		<link rel="stylesheet" type="text/css" href="assets/css/login.css">

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	</head>

	<body>
		<div class="container">
			<div class="form sign-in-container">
				<form action="login_check.php" method="POST">
					<img style="width: 70%" src="assets/images/TX-SERVICE-HAND-LOGO1.png">
					<h1>Sign in</h1>
					<div class="social-container">
						<a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
						<a href="https://google.com/"><i class="fab fa-google-plus-g"></i></a>
						<a href="#"><i class="fas fa-mobile-alt"></i></a>
					</div>
					<?php if (isset($_GET['error'])) { ?>
						<p class="error alert alert-danger text-center"><?php echo $_GET['error']; ?></p>
					<?php } ?>
					<?php if (isset($_GET['success'])) { ?>
						<p class="success"><?php echo $_GET['success']; ?></p>
					<?php } ?>
					<select name="roles" class="form-select  mb-3" aria-label="Default select example pe-3">
						<option selected value="admin">Admin</option>
						<option value="customer">Customer</option>
						<option value="worker">Worker</option>
					</select>
					<input type="email" name="useremail" placeholder="User Email">
					<input type="password" name="password" placeholder="Password">
					<a href="forget_password_form.php">Forgot your password?</a>
					<button type="signin" class="signin_btn">Sign In</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-right">
						<img style="width: 70%" src="assets/images/TX-SERVICE-HAND-LOGO1.png">
						<h1>Sign UP</h1>
						<p>Sign up here if you don't have account.</p>

						<a href="registration.php"><button class="signup_btn">Sign Up</button></a>
					</div>
				</div>
			</div>

		</div>

	</body>
</php>