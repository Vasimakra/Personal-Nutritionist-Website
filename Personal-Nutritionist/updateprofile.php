<?php
		if(isset($_POST['update_user']))
			{
					$username = $res['username']; 
					$gender = $res['gender'];   
					$age = $res['age'];  
					$height = $res['height'];  
					$weight= $res['weight'];
					$bmi= $res['bmi'];
					$email= $res['email'];
					$calories= $res['calories'];
					$result = mysqli_query($mysqli_conn,"UPDATE customerdata SET username='$username',gender='$gender',age='$age',height='$height',weight='$weight',bmi='$bmi',calories='$calories' WHERE email='$email'");
							if($result)
							{
								$_SESSION['success'] = 'update';	
                                header("location:Account.php?profile_updated=1");
							}
							else 
							{
									$error[]='Something went wrong';
							}
			}
            ?>