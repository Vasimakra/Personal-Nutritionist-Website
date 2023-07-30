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
	<title>Password Reset - Techno Smarter</title>
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
			<?php
				if(isset($_GET['token']))
				{
					$token = $_GET['token'];
				}
				if(isset($_POST['sub_set'])){
					extract($_POST);
					if($password ==''){
						$error[] = 'Please enter the password.';
					}
					if($passwordConfirm ==''){
						$error[]='Please confirm the password.';
					}
					if($password != $passwordConfirm){
						$error[] = 'Passwords do not match.';
					}
					if(strlen($password)<5){
						$error[] = 'The password is 6 characters long';
					}
					if(strlen($password)>50){
						$error[]='Password:Max lenght 50 characters Not allowed';
					}
					$fetchresultok = mysqli_query($mysqli_conn,"SELECT email FROM pass_reset WHERE token='$token'");
					if($res = mysqli_fetch_array($fetchresultok))
					{
						$email = $res['email'];
					}
					if(isset($email)!=''){
						$emailtok=$email;
					}
					else
					{
						$error[] ='Link has been expired or something missing';
						$hide=1;
					}
			if(!isset($error)){
				$options = array("cost"=>4);
				$password = password_hash($password, PASSWORD_BCRYPT,$options);
				$resultresetpass = mysqli_query($mysqli_conn,"UPDATE customerdata SET password='$password' WHERE email='$emailtok'");
				if($resultresetpass)
				{
					$success="<div class='successmsg'><span style = 'font-size:20px;'&#9989;</span>
					<br> Your password has been updated successfully..<br><a href='login.php' style='color:#fff;'>
					Login here...</a></div>";
					$resultdel = mysqli_query($mysqli_conn, "DELETE FROM pass_reset WHERE token = '$token'");
					$hide = 1;
				}
			}
				}
			
			?>
				
				<div class="login_form">
					<form action="" method="POST">
					<img src="default-image.png" class="logo img-fluid">
					<?php
						if(isset($error)){
							foreach($error as $error){
								echo '<div class="errmsg">'.$error.'</div><br>';
							}
						}
						if(isset($success)){
							echo $success;
						}
						?>
						<?php 
						if(!isset($hide)){
					?>
						<div class="form-group">
							<label class="label_txt">Password</label>
							<input type="password" name="password"  class="form-control"  value="<?php if(!empty($loginerror)){ echo $loginerror;}?>">
						</div>
						<div class="form-group">
							<label class="label_txt">Confirm Password</label>
							<input type="password" name="passwordConfirm" class="form-control">
						</div>
						<button type = "submit" name="sub_set" class="form_btn btn btn-primary">Reset Password</button>
						<?php } ?>
					</form>
						
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