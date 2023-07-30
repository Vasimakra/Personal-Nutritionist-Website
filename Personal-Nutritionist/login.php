 <!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
		<link rel="stylesheet" href="bootstrap.min.css">
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">-->
	<link rel ="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<div class="login_form">
					<img src="default-image.png" class="logo img-fluid">
					<?php
						if(isset($_GET['loginerror']))
						{
							$loginerror=$_GET['loginerror'];
						}
						if(!empty($loginerror))
						{
							echo'<p class="errmsg">Invalid login credentials,Please Try Again..</p>';
						}
					?>
					<form action="login_process.php" method="POST">
						<div class="form-group">
							<label class="label_txt">UserName or Email</label>
							<input type="text" name="login_var"  class="form-control"  value="<?php if(!empty($loginerror)){ echo $loginerror;}?>">
						</div>
						<div class="form-group">
							<label class="label_txt">Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<button type = "submit" name="sublogin" class="form_btn btn btn-primary">Login</button>
					</form>
					<p style="font-size:15px; text-align:center; margin-top:10px;"><a href="forgot-password.php" style="color: #00376b;">Forgot Password?</a></p>
					<p style="font-size:15px; text-align:center; margin-top:10px;"><a href="password-reset.php" style="color: #00376b;">Password-Reset?</a></p>
					<p> Don't have an account?<a href="signup.php">Sign up</a></p>
				</div>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>
</body>
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>-->
</html>