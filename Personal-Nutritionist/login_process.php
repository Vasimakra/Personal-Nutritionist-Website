	<?php
			include('config.php');
			
			if(isset($_POST['sublogin']))
			{
				$login=$_POST['login_var'];
				$password=$_POST['password'];
				$query = "select * from customerdata where(username='$login' OR email='$login')";
				$res = mysqli_query($mysqli_conn,$query);
				$numRows=mysqli_num_rows($res);
				if($numRows == 1)
				{
					$row = mysqli_fetch_assoc($res);
					if(password_verify ($password,$row['password']))
					{
						$_SESSION["login_sess"]="1";
						$_SESSION["login_email"]=$row['email'];
				header("location:Account.php");
				
				                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
					}
					else
					{
						header("location:login.php?loginerror=".$login);
					}
				}
				else
				{
					header("location:login.php?loginerror=".$login);
				}    
			}
		
		?>