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
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<div class="login_form">
					<img src="default-image.png" class="logo img-fluid">
				</div>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
		<div class="row">
	<?php
		include('config.php');
		if(isset($_POST['signup']))
		{
			extract($_POST);
			if(strlen($username)<3)
			{
				$error[] = 'Please enter first name using 3 characters atleast';
			}
			if(strlen($username)>50)
			{
				$error[] = 'First Name: Max lenght 20 characters Not allowed';
			}
			if(!preg_match("/^[A-za-z _]*[A-Za-z _]*$/",$username))
			{
				$error[]='Invalid Entry for username. Enter lowercase letters without
				any space and no number at the start-Eg-myusername,okauniqueuser or myusername123';
			}
			if(strlen($email)>50)
			{
				$error[]='Email:Max lenght 50 Characters Not allowed';
			}
			if(strlen($pconfirm==''))
			{
				$error[]='Please confirm the password.';
			}
			if(strlen($password != $pconfirm))
			{
				$error[] = 'The Password is 6 characters long.';
			}
			if(strlen($password)>20)
			{
				$error[] = 'Password:Max lenght 20 characters not allowed';
			}
			$sql = "select * from customerdata where (username='$username' or email='$email')";
			$res=mysqli_query($mysqli_conn,$sql);
			if(mysqli_num_rows($res)>0)
			{
				$row=mysqli_fetch_assoc($res);
				if($username==$row['username'])
				{
					$error[]='username already Exits.';
				}
				if($email==$row['email'])
				{
					$error[]='Email already Exists.';
				}
			}
			if(!isset($error))
			{
				$date=date('Y-m-d');
				$options = array ("cost"=>4);
				$password = password_hash($password,PASSWORD_BCRYPT,$options);
				$result = mysqli_query($mysqli_conn,"INSERT INTO customerdata values('','$username','$gender','$age','$height','$weight','$bmi','$email','$password','$date','$calories')");
				if($result)
				{
					$done=2;
				}
				else
				{
					$error[] = 'Failed : Something went wrong';
				}
				
			}
		}
	?>
			<div class="col-sm-3">
			<?php
			if(isset($error))
			{
				foreach($error as $error)
				{
					echo'<p class="errmsg">&#x26A0;'.$error.'</p>';
				}
			}
			?>
				
			</div>
			<div class="col-sm-6">
			<?php if(isset($done))
			{
				?>
				<div class="successmsg"><span style="font-size:100px;">&#9989;</span>
				<br> You have registered successfully . <br> <a href="login.php" style="color:#fff;">Login here...</a></div>
			<?php
			}
			else
			{
			?>
				
				<div class="signup_form">
					<form action="" method="POST">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label class="label_txt">Username</label>
									<input type ="text" class="form-control" name="username" value="<?php if(isset($error)){echo $username;}?>">
								</div>
								<div class="col-sm-6">
									<label class="label_txt">Gender</label><br>
									<input type ="radio"  name="gender" value="Male" />Male&nbsp;
									<input type ="radio"  name="gender" value="Fenale" />Female
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label class="label_txt">Age</label>
									<input type ="text" class="form-control" name="age" >
								</div>
								<div class="col-sm-6">
									<label class="label_txt">Height</label>
									<input type ="text" class="form-control" name="height" >
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label class="label_txt">Weight</label>
									<input type ="text" class="form-control" name="weight" >
								</div>
								<div class="col-sm-6">
									<label class="label_txt">BMI</label>
									<input type ="text" class="form-control" name="bmi" >
								</div>
							</div>	
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label class="label_txt">Email</label>
									<input type ="email" class="form-control" name="email" value="<?php if(isset($error)){echo $username;}?>">
								</div>
								<div class="col-sm-6">
										<label class="label_txt">Password</label>
										<input type ="password" class="form-control" name="password" >
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label class="label_txt">Confirm Password</label>
									<input type ="password" class="form-control" name="pconfirm" >
								</div>
								<div class="col-sm-6">
									<label class="label_txt">Calories</label>
									<input type ="text" class="form-control" name="calories" >
								</div>
							</div>
						</div>
						
						<button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">SignUp</button><br>
						<p>To Know Your BMI? <a href="BMI.php">BMI</a></p>
						<p>To Know Your Calcories? <a href="calcories.php">Calcories</a></p>
						<p>Have an account? <a href="login.php">Log in</a></p>
			<?php }?>
					</form>
				</div>
			</div>
			<div class="col-sm-3"></div>
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