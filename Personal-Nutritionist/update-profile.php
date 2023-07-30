		  <?php
			if(isset($_POST['update_user']))
			{
					/*$username = $res['username']; 
					$gender = $res['gender'];   
					$age = $res['age'];  
					$height = $res['height'];  
					$weight= $res['weight'];
					$bmi= $res['bmi'];
					$email= $res['email'];
					$calories= $res['calories'];
					$sql="SELECT * from customerdata where username='$username'";
					$res=mysqli_query($mysqli_conn,$sql);
						if (mysqli_num_rows($res) > 0)
						{
								$row = mysqli_fetch_assoc($res);
							if($oldusername!=$username)
								{
									if($username==$row['username'])
									{
									$error[] ='Username alredy Exists. Create Unique username';
									} 
								}
						}
						if(!isset($error))
						{ 
							$result = mysqli_query($mysqli_conn,"UPDATE customerdata SET username='$username',gender='$gender',age='$age',height='$height',
							weight='$weight',bmi='$bmi',calories='$calories' WHERE username='$username'");
							if($result)
							{
									header("location:Account.php?profile_updated=1");
							}
							else 
							{
									$error[]='Something went wrong';
							}

						}
				
			
		}
		if(isset($error))
        { 

            foreach($error as $error)
            { 
               echo '<p class="errmsg">'.$error.'</p>'; 
            }*/
			echo"submit";
      }
						
		  ?>