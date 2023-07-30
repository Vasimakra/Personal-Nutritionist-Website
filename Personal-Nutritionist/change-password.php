   <?php
require_once("config.php");
	include("header.php");
	include("menu1.php");
	
?>
<?php require_once("config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
  $email=$_SESSION["login_email"];

 ?>
 <style>
 </style>
<body>
<section class="ftco-section">
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            
        </div>
        <div class="col-sm-6">
  <div class="login_form">
      
          <div class="row">
            <div class="col"></div>
           <div class="col-6"> 
            

  <p> Welcome! <span style="color:#33CC00"></span> </p>
  </center>
           </div>
            <div class="col"><p><a href="logout.php"><span style="color:red;">Logout</span> </a></p>
         </div>
		 <?php
			if(isset($_POST['change_password'])){
				$currentPassword=$_POST['currentPassword']; 
				 $password=$_POST['password'];  
				$passwordConfirm=$_POST['passwordConfirm']; 
			   $sql="SELECT password from customerdata where email='$email'";
			   $res = mysqli_query($mysqli_conn,$sql);
					 $res=mysqli_query($mysqli_conn,$sql);
					   $row = mysqli_fetch_assoc($res);
					  if(password_verify($currentPassword,$row['password'])){
			   if($passwordConfirm ==''){
						   $error[] = 'Please confirm the password.';
					   }
					   if($password != $passwordConfirm){
						   $error[] = 'Passwords do not match.';
					   }
						 if(strlen($password)<5){ // min 
						   $error[] = 'The password is 6 characters long.';
					   }
					   
						if(strlen($password)>20){ // Max 
						   $error[] = 'Password: Max length 20 Characters Not allowed';
					   }
			   if(!isset($error))
			   {
					 $options = array("cost"=>4);
				   $password = password_hash($password,PASSWORD_BCRYPT,$options);
			   
					$result = mysqli_query($mysqli_conn,"UPDATE customerdata SET password='$password' WHERE email='$email'");
						  if($result)
						  {
					  header("location:account.php?password_updated=1");
						  }
						  else 
						  {
						   $error[]='Something went wrong';
						  }
			   }
			   
					   } 
					   else 
					   {
						   $error[]='Current password does not match.'; 
					   }   
				   }
					   if(isset($error)){ 
			   
			   foreach($error as $error){ 
				 echo '<p class="errmsg">'.$error.'</p>'; 
			   }
			   }
					   ?> 
		 <form action="" method="POST">
			<div class="row">
              <div class='col-sm-4 label-align'><label>Current Password</label></div>
			  <div class='col-sm-8 label-align'><input type ='password' name='currentpassword' class='form-control' ></div>
			</div><br>
				<div class="row">
              <div class='col-sm-4 label-align'><label>New Password</label></div>
			  <div class='col-sm-8 label-align'><input type ='password' name='password' class='form-control' ></div>
			</div><br>
				<div class="row">
              <div class='col-sm-4 label-align'><label>Confirm New Password</label></div>
			  <div class='col-sm-8 label-align'><input type ='password' name='passwordConfirm' class='form-control' ></div>
			</div><br>
		 
		
           <div class="row">
            <div class="col-sm-2">
                <button type="button" name="change_password" class="btn btn-primary">Change Password</button>
            </div>
            </div>
			</form>	
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 
</section>
</body>


<?php
include("footer.php");
?>