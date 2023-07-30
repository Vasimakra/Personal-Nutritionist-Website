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
				$date=date('y-m-d');
				$options = array ("cost"=>4);
				$password = password_hash($password,PASSWORD_BCRYPT,$options);
				$result = mysqli_query($mysqli_conn,"INSERT INTO customerdata values('','$username','$gender','$age','$height','$weight','$bmi','$email','$password','$date')");
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
	
	
	
	value="<?php /*if(isset($error)){echo $username;}*/?>"