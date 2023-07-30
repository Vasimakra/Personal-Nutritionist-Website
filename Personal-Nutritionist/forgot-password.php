<!DOCTYPE html>
<?php
	include('config.php');
	if(isset($_SESSION["login_sec"]))
	{
		header("location:account.php");
	}
?>
<html>
<head>
	<title>Forgot Password - Techno Smarter</title>
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
						if(isset($_GET['err'])){
							$err=$_GET['err'];
							echo"<p class='errmsg'>No user found.</p>";
						}
						if(isset($_GET['servererr'])){
							echo"<p class='errmsg'>The server failed to send the message.Please try again later.</p>";
						}
						if(isset($_GET['somethingwrong'])){
							echo'<p class="errmsg">Something went wrong.</p>';
						
						}
						if(isset($_GET['sent'])){
							echo "<div class='successmsg'>Reset link has been sent to your registered 
							email id. Kindly check your email. It can be taken 2 to 3 minutes to 
							deliver on your email id .</div>";
						}
					?>
					<?php if(!isset($_GET['sent'])){ ?>
					<form action="forgot_process.php" method="POST">
						<div class="form-group">
							<label class="label_txt">UserName or Email</label>
							<input type="text" name="login_var"  class="form-control"  value="<?php if(!empty($loginerror)){ echo $loginerror;}?>">
						</div>
						<button type = "submit" name="subforgot" class="form_btn btn btn-primary">Send Link</button>
					</form>
					<?php } ?>
					<p> Have an account?<a href="login.php">Login</a></p>
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